<!DOCTYPE html>
<html>
<head>
	<title>Online Bounce Email Checker Tool - Vivzon</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Primary Meta Tags -->
    <title>Online Bounce Email Checker Tool - Vivzon</title>
    <meta name="title" content="Online Bounce Email Checker Tool - Vivzon" />
    <meta name="description" content="Learn how Vivzon Bounce Email Checker provides superior bulk email list validation with 99% accurate results. Upload a CSV, XLS, or XLSX file and Vivzon Bounce Email Checker will evaluate your list for free." />
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://vivzon.in/tools/bounce-email-checker/" />
    <meta property="og:title" content="Online Bounce Email Checker Tool - Vivzon" />
    <meta property="og:description" content="Learn how Vivzon Bounce Email Checker provides superior bulk email list validation with 99% accurate results. Upload a CSV, XLS, or XLSX file and Vivzon Bounce Email Checker will evaluate your list for free." />
    <meta property="og:image" content="https://vivzon.in/tools/bounce-email-checker/upload/bounce-email-checker.jpeg" />
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://vivzon.in/tools/bounce-email-checker/" />
    <meta property="twitter:title" content="Online Bounce Email Checker Tool - Vivzon" />
    <meta property="twitter:description" content="Learn how Vivzon Bounce Email Checker provides superior bulk email list validation with 99% accurate results. Upload a CSV, XLS, or XLSX file and Vivzon Bounce Email Checker will evaluate your list for free." />
    <meta property="twitter:image" content="https://vivzon.in/tools/bounce-email-checker/upload/bounce-email-checker.jpeg" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="shortcut icon" href="https://vivzon.in/img/favicon.png" type="image/x-icon">
    
    <style>
        .smt-btn {
            width: 200px;
            padding: 9px;
            margin: auto;
            display: block;
            margin-top: 25px!important;
        }
    </style>
</head>
<body class="bg-light">
	<div class="container">
		<div class="row">
		    <form action="send.php" method="post" enctype="multipart/form-data">
    		    <div class="col-md-12 mt-5 bg-white border p-4 rounded">
    		        <h1 class="h3 font-weight-bold text-center mb-3">Bounce Email Checker</h1>
    		        <p class="text-center">Learn how Vivzon Bounce Email Checker provides superior bulk email list validation with 99% accurate results. Upload a CSV, XLS, or XLSX file and Vivzon Bounce Email Checker will evaluate your list for free.</p>
        		    <label class="font-weight-bold">Enter your email id:</label><br>
                	<textarea type="email" name="emails" id="emails" rows="5" class="form-control mb-3" placeholder="email@example.com,email1@example.com..."></textarea>
                	<p class="text-center font-weight-bold">OR</p>
                	<p><input type="file" name="email_doc" class="form-control" accept=".csv, .xls, .xlsx"></p>
                	<button type="submit" class="btn btn-primary smt-btn" name="emailSubmit">Submit</button><br>
    		    </div>
		    </form>
		</div>
	</div>
</body>
</html>
