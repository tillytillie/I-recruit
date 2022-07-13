<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="recruit, job, skills, career, cv, resume">
<!-----------------------------------------body--------------------------------------->

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
         <link rel="stylesheet" type="text/css" href="style.css">
         
          <!--------------------------------JS style link----------------->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <!--------------------------------JS style link----------------->
          <script src="../js/recruit.js"></script>
</head>
<body>
<!-----------------------------------------------------Page Header------------------------>

<header class="header">
        <nav class="navbar navbar-expand-lg fixed-top bg-info ">
            <div class="container-fluid"><a href="../loginsystem/welcome.php" class="navbar-brand "><h3>I-Recruit</h3></a>
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
                <div id="navbarcollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto blockquote">
                    <li class="nav-item"><a href="../header/article.php" class="nav-link link-scroll">Articles</a></li>
             <li class="nav-item"><a href="../header/skill.php" class="nav-link link-scroll">Skills</a></li>
                <li class="nav-item"><a href="../header/resume-cover-letter.php" class="nav-link link-scroll">Resume & Cover Letter</a></li>
                <li class="nav-item"><a href="../header/interview.php" class="nav-link link-scroll">Interviews</a></li>
                <li class="nav-item"><a href="../header/contact.php" class="nav-link link-scroll">Contact</a></li>
                        <li class="nav-item"><a class="nav-link link-scroll btn btn-danger" href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br> <br> <br><br>
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-12 shadow-lg ">
  <div class="row">
  <div class="col-lg-6 mx-auto">
       <!-----------------------------------------------------------------Display Job Placement------------------------------->
       <div id="carousel-name" class="carousel " data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carousel-name" data-slide-to="0" class="active"></li>
<li data-target="#carousel-name" data-slide-to="1"></li>
<li data-target="#carousel-name" data-slide-to="2"></li>
</ol>

<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<img class="d-block img-fluid w-100" src="../img/treasure.jpg" alt="First slide">
<div class="carousel-caption d-none d-md-block">
</div>
</div>


<div class="carousel-item">
<img class="d-block img-fluid w-100" src="../img/hiring.jpg" alt="Third slide">
<div class="carousel-caption d-none d-md-block">
</div>
</div>



<div class="carousel-item">
<img class="d-block img-fluid w-100" src="../img/job1.jpg" alt="Third slide">
<div class="carousel-caption d-none d-md-block">
<a href="../other/recruitForm.php" class="btn btn-primary">Apply</a>
</div>
</div>
</div>

<a class="carousel-control-prev" href="#carousel-name" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-name" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
    </div>
       
       
          <!----------------------------------work etiquette------------------->
         
          <div class="col-lg-4 mx-auto">
            <table class="table table-bordered">
            <thead class="thead-dark text-center">
            <tr>
                  <th>Things to know before apply for job</th>
            </tr>
             </thead>
            <tbody class="text-justify">
            <tr>
               
                <th>As you applying for this jobs don't go and loose an opportunity, apply with good cv and resume</th>
            </tr>
            <tr>
                <th>Make sure you have ZOOM app on your phone for online interview purpose.</th>
            </tr>
            <tr>
<th> Put your WhatsApp number on your CV, make sure your phone number is always on please.</th>
                
             </tr>
            </tbody>
             </table>
          </div>
    </div>  
    </div>
          
    <!------------------------------------------------------Job Placement---------------------------------->

    <div class="container mt-5">
    <h3 class="text-center">Top Jobs</h3>
        <div class="row shadow-lg">
              <div class="col-md-3 shadow-lg ">
              <p class="mb-0">Medical Officer</p>
              <p class="mb-0 text-info">NewGate</p>
              <p class="mb-0">Abuja</p>
              <p class="mb-0">Full Time</p>
              <p class="mb-0 text-info">Medical & Pharmaceutical</p>
              <p class="mb-0 text-danger">Salary: $120,0000per annum</p>
            </div>
            <div class="col-md-3 shadow-lg ">
              <p class="mb-0">Business Analyst</p>
              <p class="mb-0 text-info">GafTech</p>
              <p class="mb-0">Abuja</p>
              <p class="mb-0">Full Time</p>
              <p class="mb-0 text-info">IT</p>
              <p class="mb-0 text-danger">Salary: $100,0000per annum</p>
            </div>
            <div class="col-md-3 shadow-lg ">
              <p class="mb-0">Comperator Operator</p>
              <p class="mb-0 text-info">TillyTech</p>
              <p class="mb-0">Lagos</p>
              <p class="mb-0">Full Time</p>
              <p class="mb-0 text-info">IT</p>
              <p class="mb-0 text-danger">Salary: $90,0000per annum</p>
            </div>
            <div class="col-md-3 shadow-lg ">
              <p class="mb-0">Accountant</p>
              <p class="mb-0 text-info">TillyTech</p>
              <p class="mb-0">Lagos</p>
              <p class="mb-0">Full Time</p>
              <p class="mb-0 text-info">IT</p>
              <p class="mb-0 text-danger">Salary: $90,0000per annum</p>
            </div>
            </div>
            <!------------------------------------Column 2----------------------->
            <div class="row shadow-lg mt-3">
              <div class="col-md-3 shadow-lg ">
              <p class="mb-0">Comuter Teacher</p>
              <p class="mb-0 text-info">Jesuit Loyola College</p>
              <p class="mb-0">Abuja</p>
              <p class="mb-0">Full Time</p>
              <p class="mb-0 text-info">Teaching</p>
              <p class="mb-0 text-danger">Salary: $80,0000per annum</p>
            </div>
            <div class="col-md-3 shadow-lg ">
              <p class="mb-0">Driver & Mechanic</p>
              <p class="mb-0 text-info">God Grace Motors</p>
              <p class="mb-0">Kano</p>
              <p class="mb-0">Full Time</p>
              <p class="mb-0 text-info">Automobile</p>
              <p class="mb-0 text-danger">Salary: $70,0000per annum</p>
            </div>
            <div class="col-md-3 ">
              <p class="mb-0">Stock Keeper</p>
              <p class="mb-0 text-info">GenPharm</p>
              <p class="mb-0">Lagos</p>
              <p class="mb-0">Full Time</p>
              <p class="mb-0 text-info">Pharmacy</p>
              <p class="mb-0 text-danger">Salary: $50,0000per annum</p>
            </div>
            <div class="col-md-3 shadow-lg ">
              <p class="mb-0">Security Man</p>
              <p class="mb-0 text-info">Aso Guard</p>
              <p class="mb-0">Abia</p>
              <p class="mb-0">Full Time</p>
              <p class="mb-0 text-info">Security</p>
              <p class="mb-0 text-danger">Salary: $40,0000per annum</p>
            </div>
        </div>
        <button class="btn btn-danger mt-2 pull-right" >View More Company Hiring</button>
    </div>
    </div>

        <!---<div class="col-md-12 mt-5">
        <h2 class="text text-center">Stay Updated</h2>
        <p  class="text text-center">Join our newsletter and keep up to date with the latest news and jobs<p>
        <form class="row" action="subcribe.php" method="POST">
            <div class="col-md-6 form-group">
               Email: &nbsp; <input type="email"  class="form-control" placeholder="exampls@gmail.com" required name="email">&nbsp;
               </div>
               <div class="col-md-6 form-group">
                Name: &nbsp;<input type="text"  class="form-control" placeholder="Name" required name="inst">&nbsp;
                </div>
                <div class="col-md-6 form-group">
                Category: &nbsp;<input type="text" class="form-control" placeholder="Employer or Job Seeker" required name="nick" >&nbsp; <br><br>
                </div>
                <button type="submit" class="btn btn-danger" name="sub">Subscribe</button>
                </div>
                </div>
            </form>
             
    </div>----->
      <!-----------------------------------------------------Our Clients------------------------------>

    <!-----------------------------------------------------Footer------------------------------>
  <?php include_once '../footer.php' ?>
    </body>

      


        </div>

        <hr>


    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>	
</body>
</html>