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
         <link rel="stylesheet" href="../css/recruit.css">
         
          <!--------------------------------JS style link----------------->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <!--------------------------------JS style link----------------->
          <script src="../js/recruit.js"></script>
         
</head>
<body>
    
<header class="header">

<nav class="navbar navbar-expand-lg fixed-top bg-info ">
    <div class="container-fluid"><a href="../log/index.php" class="navbar-brand "><h3>I-Recruit</h3></a>
        <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
        <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto blockquote">
            <li class="nav-item"><a href="../header/article.php" class="nav-link link-scroll">Articles</a></li>
     <li class="nav-item"><a href="../header/skill.php" class="nav-link link-scroll">Skills</a></li>
        <li class="nav-item"><a href="../header/resume-cover-letter.php" class="nav-link link-scroll">Resume & Cover Letter</a></li>
        <li class="nav-item"><a href="../header/interview.php" class="nav-link link-scroll">Interviews</a></li>
        <li class="nav-item"><a href="../header/contact.php" class="nav-link link-scroll">Contact</a></li>
                <li class="nav-item"><a class="nav-link link-scroll btn btn-danger" href="../log/profile.php"><i class="fa fa-user"></i> Profile</a></li>
            </ul>
        </div>
    </div>
</nav>
</header>

<br><br><br>  

<!--------------------------------------form------------------->
  
    <div class="container mt-5 blockquote shadow-lg">
    <div class="row">
    <div class="col-lg-12">
   
    <h3 class="text-center">Fill the Form below to Apply</h3> <hr>
                <form action="recruit.php" method="POST" class="form-group row">
                <div class="form-group col-sm-6">
                First Name:
                <input type="text" class="form-control" placeholder="First Name" name="fname">
                </div>
                <div class="form- col-sm-6">
                 Middle Name: <input type="text" class="form-control" placeholder="Middle Name" name="mname">
                </div>
                <div class="form-group col-sm-6">
                 Last Name: <input type="text" class="form-control" placeholder="Last Name" name="lname">
                </div>
                 <div class="form-group col-sm-6">
                 Phone No: <input type="text" class="form-control" placeholder="Phone No" name="pho">
                 </div>
                 <div class="form-group col-sm-6">
                 Email: <input type="email"class="form-control" placeholder="example@gmail.com" name="email">
                 </div>
                 <div class="form-group col-sm-6">
                 Position Apply for: <input type="text"class="form-control" placeholder="Accountant" name="pos">
                 </div>
                 <div class="form-group col-sm-6">
                 Higher Qualification with date: <input type="text"class="form-control" placeholder="B.Sc/NCE/OND (2020)" name="qua">
                 </div>
                 <div class="form-group col-sm-6">
                 <button class="btn btn-info pull-right btn-group-lg" type=submit name="apply">Apply</button>
                 </div>
               
                </form>
            </div>
        </div>
    </div>
    </div>
    </body>