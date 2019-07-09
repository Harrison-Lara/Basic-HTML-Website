<!--
 Harrison R. Lara
    16209936        
    12/08/2017
-->

<!-- Page credit: bootstrap class column offset   https://www.w3schools.com/bootstrap/bootstrap_grid_examples.asp -->

<?php
    
    if(!session_start()){
        header("Location: home.php");
        exit;
    }
    
    if(!isset($_SESSION['loggedin'])){
        header("Location: index.php");
        exit;
    }
?>

<html>

    <head>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom-styles.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1/jquery-ui.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <link rel="stylesheet" href="/resources/demos/style.css">

        <script>
            $(function(){
                $("#accordion").accordion();
            });
        </script>
    </head>

    <body>
        <div class="home-bg">
        <div class="navigation">
            <div class="row">
                <div class="col-sm-3"><a href="home.php">Home</a></div>
                <div class="col-sm-3"><a href="portfolio.php">Portfolio</a></div>
                <div class="col-sm-3"><a href="contact.php">Connect With Us!</a></div>
                <div class="col-sm-3"><a href="logout.php">Logout</a></div>
            </div>
        </div>
            <div class="accordgrid">
        <div id="accordion">
            <h3>Tell Me About Yourself.</h3>
            <div>
                <p>My name is Harrison Lara and I am an Information Technology major. I am a sophmore at the University of Missouri. I am also working to obtain a minor in business, then once completing my bachelors degree, I will apply to graduate school to get my masters in Business Administration at UMKC. </p>
            </div>
            <h3>Site Description.</h3>
            <div>
                <p>This website was created to show the knowledge I have gained from CS 2830, taught by Professor Wergeles. This website will satisfy all the requirements requested for the final project.</p>
            </div>
            <h3>Components Of This Site.</h3>
            <div>
                <p> The first tab labeled "Home" is the current page you are on. This page will give you an idea of how to navigate the website. The second tab is a "Portfolio" consisting of pictures and an embedded video for you. The last tab is the "Connect With Us!" tab, which lets you complete a form and contact us.  
                </p>
                <ul>
                    <li>Section 1: Home</li>
                    <li>Section 2: Portfolio</li>
                    <li>Section 3: Connect With Us!</li>
                </ul>
            </div>
            <h3>Why IT and Business Degrees?</h3>
            <div>
                <p> I have had a passion for computer systems since before I could remember. Learning new things about computation is very intriguing to me. I would like to obtain a position with Tesla after graduation and work with the autopilot feature. My business background combined with IT will assist me in becoming an IT director after some years of experience at minimum.</p>
            </div>
        </div>
            </div>
            </div>
    </body>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="form.js"></script>

</html>