<!--
    Harrison R. Lara
    16209936        
    12/08/2017
-->

<!-- Page credit: bootstrap class column offset https://www.w3schools.com/bootstrap/bootstrap_grid_examples.asp -->

<?php
    
    if(!session_start()){
        header("Location: home.php");
        exit;
    }
    
    if(!isset($_SESSION['loggedin'])){
        header("Location: index.php");
    }
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom-styles.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1/jquery-ui.css">
</head>

<body class="contact-bg">
    <!--<div class="contact-bg">-->
    <div class="navigation">
        <div class="row">
            <div class="col-sm-3"><a href="home.php">Home</a></div>
            <div class="col-sm-3"><a href="portfolio.php">Portfolio</a></div>
            <div class="col-sm-3"><a href="contact.php">Connect With Us!</a></div>
            <div class="col-sm-3"><a href="logout.php">Logout</a></div>
        </div>
    </div>
    <div class="row">
        <div class="contact">
            <div class="col-sm-6 col-sm-offset-3">
                <h1>Contact Us!</h1></div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-4">
            <form id="form">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>
                            <div class="form-text">Name</div>
                            <input type="text" id="name"> </label>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>
                            <div class="form-text">Phone</div>
                            <input type="text" id="contact"> </label>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>
                            <div class="form-text">Email</div>
                            <input type="text" id="email"> </label>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>
                            <div class="form-text">Reason For Contact</div>
                            <textarea placeholder="Enter Message" id="message"></textarea>
                        </label>
                    </div>
                </div>
                <input type="button" class="button" id="submit" value="Submit" />
                <p id="returnmessage"></p>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="form.js"></script>

</html>