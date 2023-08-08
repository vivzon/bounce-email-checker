<?php
    require"../../Ad-panel/libs/config.php";
    if(isset($_POST['emailSubmit'])){
        $uid=$_SERVER['REMOTE_ADDR'];
        $file_name=$_FILES["email_doc"]["name"];
        $filename=$_FILES["email_doc"]["tmp_name"];
        $FileSize=$_FILES["email_doc"]["size"];
        
        if($_FILES["email_doc"]["size"] > 0){
            $email = file($filename);
            $email = file($filename, FILE_SKIP_EMPTY_LINES);
            $email_row=count($email);
        }else if(!empty($_POST['emails'])){
            $email=explode(',',$_POST['emails']);
            $email_row=count($email);
        }
        
        require"validator.php";
        
        if($email_row<100){
        
            foreach($email as $val){
                
                // Remove illegal characters
                $val = filter_var(trim($val), FILTER_SANITIZE_EMAIL);
                
                if (filter_var($val, FILTER_VALIDATE_EMAIL)) {
                    
                    // Split the email address into user and domain parts
                    list($user, $domain) = explode('@', $val);
                
                    // Perform DNS MX record lookup to check if the domain exists
                    if (checkdnsrr($domain, 'MX')) {
                        
                        if (isBouncedEmail($val)) {
                            
                            $query02=mysqli_query($conn, "DELETE FROM `email_list1` WHERE `email`='$val'");
                        
                            echo "<span style='color:#f2931a;'>".$val."</span> - Bounced<br>";
                            $bounce+=1;
                            
                        }else{
                    
                            $query0222=mysqli_query($conn, "SELECT * FROM `email_list1` WHERE `email`='$val'");
                            
                            if(mysqli_num_rows($query0222)=='0'){
                                $query02=mysqli_query($conn, "INSERT INTO `email_list1`(`uid`, `category`, `temp_id`, `email`, `status`, `date`) VALUES ('$uid', '$file_name', 'validator', '$val', '1', NOW())");
                            }else{
                                $query02=mysqli_query($conn, "UPDATE `email_list1` SET `status`='1' WHERE `email`='$val'");
                            }
                            
                            echo "<span style='color:#0cbb0c;'>".$val."</span> - Valid<br>";
                            $success+=1;
                            
                        }
                        
                    } else {
                        
                        $query02=mysqli_query($conn, "DELETE FROM `email_list1` WHERE `email`='$val'");
                        
                        echo "<span style='color:#f2931a;'>".$val."</span> - Invalid<br>";
                        $error+=1;
                        
                    }
                    
                } else {
                    
                    $query02=mysqli_query($conn, "DELETE FROM `email_list1` WHERE `email`='$val'");
                    
                    echo "<span style='color:red;'>".$val."</span> - Invalid<br>";
                    $error+=1;
                    
                }
                
            }
            
            $output="Total Valid Emails ".$success." AND Total Bounce Emails ".$bounce." AND Total Invalid Emails ".$error."<br><br><a href='https://vivzon.in/tools/bounce-email-checker/'>Go to main page</a><br>";
         
            echo $output;
            
        }else{
            
            echo"You can only check 100 emails at a time. So try again.";
            
        }
    }
    // Example usage
    /*$email = 'example@example.com';
    
    if (validateEmail($email)) {
        if (isBouncedEmail($email)) {
            echo "The email has bounced.";
        } else {
            echo "The email is valid.";
        }
    } else {
        echo "The email is invalid.";
    }*/
?>