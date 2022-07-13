<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: log/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

      <!-- For apple devices -->
      <link rel = "apple-touch-icon" type = "image/png" href = "icons/favicon.png"/>
    <!--------------------------------Web style link----------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
         <!--------------------------------Custome style link----------------->
         <link rel="stylesheet" href="css/header.css">
         
          <!--------------------------------JS style link----------------->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <!--------------------------------JS style link----------------->
          <script src=""></script>
    <title>Order: I-Recruiter</title>
</head>
<body>

<header class="header">

        <nav class="navbar navbar-expand-lg fixed-top bg-info ">
            <div class="container-fluid"><a href="../loginsystem/welcome.php" class="navbar-brand "><h3>I-Recruit</h3></a>
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
                <div id="navbarcollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto blockquote">
                    <li class="nav-item"><a href="header/article.php" class="nav-link link-scroll">Articles</a></li>
             <li class="nav-item"><a href="header/skill.php" class="nav-link link-scroll">Skills</a></li>
                <li class="nav-item"><a href="header/resume-cover-letter.php" class="nav-link link-scroll">Resume & Cover Letter</a></li>
                <li class="nav-item"><a href="header/interview.php" class="nav-link link-scroll">Interviews</a></li>
                <li class="nav-item"><a href="header/contact.php" class="nav-link link-scroll">Contact</a></li>
                        <li class="nav-item"><a class="nav-link link-scroll btn btn-danger" href="loginsystem/profile.php"><i class="fa fa-user"></i> Profile</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
 
   <br><br><br>  

<div class="container">
<div class="row">   
                <div class="col-sm-8">
                        <h2 class="title text-center">Resume and Cover Letter</h2>
                        <form id="main-contact-form" action="./other/order.inc.php" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="fullname" class="form-control" required="required" placeholder="Full Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" name="tel" class="form-control" required="required" placeholder="Phone Number">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="url" name="linkedin" class="form-control"  placeholder="Linkedin url">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="details" id="details" required="required" class="form-control" rows="8" placeholder="Your Details Here: e.g school attended, area of insterest qualification with date, professional certificate and skills"></textarea>
                            </div>                        
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-info pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-4">
                    </div>
                </div>



</div>



</body>

</html>
