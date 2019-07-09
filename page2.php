<!--
 Harrison R. Lara
    16209936        
    12/08/2017
-->

<!-- Page Credit: PHP from Professor Wergeles  (in class)-->

<?php
	if(!session_start()) {
		header("Location: error.php");
		exit;
	}
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 2</title>
    <link href="app.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
</head>
<body>
    <div class="ui-widget pageWidget">
        <h1 class="ui-widget-header">Page 2</h1>
        <div class="ui-widget-content">
            <p>This page has protected content.</p>
            <p>For access, please log in. </p>
            <p><a href='page1.php'>Go to page 1.</a></p>
            <p><a href='logout.php'>Logout</a></p>
        </div>
    </div>
</body>
</html>
