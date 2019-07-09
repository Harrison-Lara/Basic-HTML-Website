<!--
 Harrison R. Lara
    16209936        
    12/08/2017
-->

<!-- Page Credit: PHP from Professor Wergeles (in class) and bootstrap class column offset   
     https://www.w3schools.com/bootstrap/bootstrap_grid_examples.asp -->

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
    <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css"> </head>

<body>
    <div class="portfolio-bg">
    <div class="navigation">
        <div class="row">
            <div class="col-sm-3"><a href="home.php">Home</a></div>
            <div class="col-sm-3"><a href="portfolio.php">Portfolio</a></div>
            <div class="col-sm-3"><a href="contact.php">Connect With Us!</a></div>
            <div class="col-sm-3"><a href="logout.php">Logout</a></div>
        </div>
    </div>
        
    <div class="portfolio">
        <div class="col-sm-3">
            <a class="fancybox" rel="gallery1" href="Images/tesla2.jpg" title="Tesla2"> <img src="Images/tesla2.jpg" alt="Tesla2" /> </a>
        </div>
        <div class="col-sm-3">
            <a class="fancybox" rel="gallery1" href="Images/tesla4.jpg" title="Tesla3"> <img src="Images/tesla4.jpg" alt="Tesla4" /> </a>
        </div>
        <div class="col-sm-3">
            <a class="fancybox" rel="gallery1" href="Images/tesla5.jpg" title="Tesla5"> <img src="Images/tesla5.jpg" alt="Tesla5" /> </a>
        </div>
        <div class="col-sm-3">
            <a class="fancybox" rel="gallery1" href="Images/tesla6.jpg" title="Tesla6"> <img src="Images/tesla6.jpg" alt="Tesla6" /> </a>
        </div>
    </div>
    <div class="col-sm-6 col-sm-offset-3 portfoliovideo">
        <iframe width="540" height="386" src="https://www.youtube.com/embed/Gd9JQAkcYak" frameborder="0" gesture="media" allowfullscreen></iframe>
    </div>
        
    </div>
</body>
    
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="form.js"></script>
<script type="text/javascript" src="portfolio.js"></script>
<script type="text/javascript" src="source/jquery.fancybox.js"></script>

</html>