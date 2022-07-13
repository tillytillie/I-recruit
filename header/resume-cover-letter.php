<?php
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../log/login.php');
}
?>
<!DOCTYPE html>
<html>
<lang='en'>

    <head>
    <meta charset="utf-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1,">

    <title>I-Recruit</title>
    <link rel="shortcut icon" type="image/x-icon" href="icons/favicon.png">
   
    <!-- For apple devices -->
    <link rel = "apple-touch-icon" type = "image/png" href = "icons/favicon.png"/>
    <!--------------------------------Web style link----------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
         <!--------------------------------Custome style link----------------->
         <link rel="stylesheet" href="../css/header.css">
         
          <!--------------------------------JS style link----------------->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <!--------------------------------JS style link----------------->
          <script src="../js/header.js"></script>
           <style>
              </style>
</head>
<body>
<header class="header">

<nav class="navbar navbar-expand-lg fixed-top bg-info ">
    <div class="container"><a href="../log/index.php"class="navbar-brand scrollTo "><h3>I-Recruit</h3></a>
 
    <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
        <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto blockquote">
            <li class="nav-item"><a href="article.php" class="nav-link link-scroll">Articles</a></li>
              
                <li class="nav-item"><a href="skill.php" class="nav-link link-scroll">Skills</a></li>
                <li class="nav-item"><a href="resume-cover-letter.php" class="nav-link link-scroll">Resume & Cover Letter</a></li>
                <li class="nav-item"><a href="interview.php" class="nav-link link-scroll">Interviews</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link link-scroll">Contact</a></li>
                <?php echo'  <li class="nav-item"><a class="nav-link link-scroll btn btn-danger" href="../log/profile.php"><i class="fa fa-user"></i> Profile</a></li>';
?>
            </ul>
        </div>
    </div>
</nav>
</header>
<div class="container">
<div class="row mt-5">
    <h2 class="mt-5 text text-justify blockquote"><i class="fa fa-bullhorn text-danger fa-lg"></i>
    Did you know that recruiters spend an average of 2 seconds on your resume before deciding whether or not to actually read it?
    This website uses professional field tested resume templates that follow the exact 'resume rules'employers look for.
    Easy to use and done within minutes click on link for <a class="text-info" href="../order.php">professional resume and cover letter.</a> </h2>
</div>
<div class="row">
    <h3 class="text-muted blockquote">Our resume and cover letter expert can help your resume and cover letter more attrative to employer.</h3>
    <div class="col-lg-4">
    <img class="img-fluid" src="../img/entry.jpg">
    <a class="btn btn-info mt-0" href="../order.php"> Get Started</a>
    </div>

    <div class="col-lg-4">
    <img class="img-fluid" src="../img/mid.jpg">
    <a class="btn btn-info mt-0" href="../order.php"> Get Started</a>
    </div>

    <div class="col-lg-4">
    <img class="img-fluid" src="../img/senior.jpg">
    <a class="btn btn-info mt-0" href="../order.php"> Get Started</a>
    </div>
</div>

</div>


<?php require_once '../footer.php'?>;
