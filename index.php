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
         <link rel="stylesheet" href="css/recruit.css">
         
          <!--------------------------------JS style link----------------->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <!--------------------------------JS style link----------------->
          <script src="js/recruit.js"></script>
    </head>


<body>
<!-----------------------------------------------------Page Header------------------------>
<header class="header">
        <nav class="navbar navbar-expand-lg fixed-top bg-info ">
            <div class="container-fluid"><a href="index.php" class="navbar-brand "><h3>I-Recruit</h3></a>
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
                <div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto blockquote">
                
                <li class="nav-item"><a href="./header/article.php" class="nav-link link-scroll">Articles</a></li>
                <li class="nav-item"><a href="./header/skill.php" class="nav-link link-scroll">Skills</a></li>
                <li class="nav-item"><a href="./header/resume-cover-letter.php" class="nav-link link-scroll">Resume & Cover Letter</a></li>
                <li class="nav-item"><a href="./header/interview.php" class="nav-link link-scroll">Interviews</a></li>
                <li class="nav-item"><a href="./header/contact.php" class="nav-link link-scroll">Contact</a></li>
            </ul>
                </div>
            </div>
        </nav>
    </header>
   

    <!--------------------------------------------About Bar------------------------------------------------>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 mt-5 pt-5">
                <h2 class="bg-info text-white text-center">About</h2>
                <p class="card-text text-justify blockquote">I-Recruiter is an integrated portal that offer candidate a platoform to showscase
                 there skills, by given them job with awesome salary, Always check our job update section to see the latest update.
                 Search or get recommendations for jobs that match what you're looking for. Also create a profile to boost your career.
                 I-Recruiter help you to connect to potential employers, get access to career guidance and advice via the 
                  Article and standout from the rest. you will alo get recommendations for jobs that match what you are looking 
                  for. <a href="log/index.php">login or signup here</a></p>            
                 <!-- Button trigger modal -->
                 <button class="btn btn-danger" data-toggle="modal" data-target="#about">Subcribe for NewsLetter</button>
                 <p id="subscribe"></p>
                
                
<!--------------------------------------------Modal for News Letter------------------------------------------------>

                <div class="modal fade" id="about" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">News Letter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
         </button>
        </div>
        <div class="modal-body">
        <h2>Stay Updated</h2>
        <form role=form action="subcribe.php" method="POST">
        <div class="form-group">
        Email: <input type="email"  class="form-control" placeholder="exampls@gmail.com" required name="email">
                Name:<input type="text"  class="form-control" placeholder="Name" required name="inst">
                Category:<input type="text" class="form-control" placeholder="Employer & Job Seeker" required name="nick" > <br>
                <button type="submit" class="btn btn-primary" name="sub" onclick="myFunction()">Subscribe</button>
               
                </div>
               
        </form>
                </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
    </div>
    </div>
          
           
      
<!------------------------------------------------------Update----------------------------------->

    <div class="col-lg-4 mt-5 pt-5">
            <h2 class="card-title bg-info text-white text-center">Update</h2>        
                <p class="card-text text-justify blockquote">There are over 10 vacancies available in our company.
            The candidate that best suit the position will be called upon for interview
                Check the job descriptions and requirements in the
                 <!-- Scroll Js -->
                 <a class="requirement active"  onclick="scrollWin(0, 900)"> link </a> you apply.
             Note: Multiple entering of application will lead to automatic disqualification.
            Application closes on <h4 class="text-center text-info" id="demo"></h4>.
                </p>
               <a href="./other/recruitForm.php" ><button class="btn btn-info">Apply</button></a>
              
    </div>
       <!------------------------------------------------------Login/signup----------------------------------->
       <div class="col-lg-3 mt-5 pt-5 bg-light">
                <h2 class="card-title bg-info text-white text-center">Membership</h2>
                <p>Job Seeker & Employers </p>
                <a class="btn btn-danger" href="log/index.php">Login || SignUp for Free</a>	
        
       </div>
       <!------------------------------------------------------------------card---------------------->
    <div class="container-fluid mt-5">
            <div class="row">
            <div class="col-md-8 shadow">
    <img class="card-img-top w-100" src="img/cv-review.jpg" alt="Card image cap" >
    <h4 class="card-title ">Resume and Cover Letter Review</h4>
    <p class="card-text">We offer review of resume and cover letter to meet up with standard at cheap money. click on this link to get started</p>
    <a href="./header/resume-cover-letter.php" class="btn btn-info pull-right">Review Resume</a> <br> <br>
    </div>
   
   
       
          <!----------------------------------Quick link------------------->
         
          <div class="col-md-4 mt-5">
            <table class="quick table table-hover shadow-lg ">
            <thead class="thead-dark text-center">
            <tr>
                  <th>Quick Links &nbsp;<?php $date=date("D-M-Y"); print_r($date);  ?></th>
            </tr>
            </thead>
            <tbody class="text-center blockquote">
            <tr>
               
               
              
    </th><tr>  
                <tr><th>Latest Job</th><tr>
                <tr><th>CV and Cover Letter Guildline</th><tr>
                <tr><th>Interviews</th><tr>
                <tr><th>Marketing</th><tr>
             </tr>
            </tbody>
             </table>
               <!------------------------------------------quick vote---------------------------------->
            <div class="shadow-lg">
            <h2 >Quick Survey</h2>
            <p>Please Rate this Website</p>
           <i class="fa fa-thumbs-up text-info pull-right" id="rate" onclick="clickCounter()"> </i> <p class="pull-right mt-5 mr-0 ml-5" id="like"></p>
            <i class="fa fa-thumbs-down text-danger pull-left"  id="rate" onclick="DisklikeclickCounter()"></i> <p class="pull-left mt-5 mr-5 ml-auto" id="dislike"></p>
            </div>
            </div>
            </div>
            </div>
                <!------------------------------------------------------JOb requirement table----------------->
                <div class="col-md-10 mt-5 shadow-lg mr-auto ml-auto job">
                <table class=" table table-bordered mt-5 blockquote">
                <thead class="thead-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Position</th>
                    <th>Available</th>
                     <th>Requirement</th>
                </tr>
                </thead>
                <tbody class="text-justify">
                    <tr>
                        <th>1.</th>
                        <th>Accountant</th>
                        <th>4</th>
                        <th>He/she must be a member of FCA and possess a min of B.sc or equilvalent and min, of 2years of experiences</th>
                    </tr>
                    <tr>
                        <th>2.</th>
                        <th>Human Resources</th>
                        <th>2</th>
                        <th>He/she must be a member of HR society and possess a min of B.sc or equilvalent, min of 2years of experiences</th>
                    </tr>
                    <tr>
                        <th>3.</th>
                        <th>Gateman</th>
                        <th>2</th>
                        <th>Min of SSCE or equilvalent, min of 2years of experience, must be a member of any volutarily organisation such as Man-O-War and the likes</th>
                    </tr>
                    <tr>
                        <th>4.</th>
                        <th>Sales Rep</th>
                        <th>2</th>
                        <th>Min of OND/NCE or equilvalent, min of 2years of experience.</th>
                    </tr>
                    <tr>
                        <th colspan="4">General Requirement: The idea Candidate must be computer literacy and willing to travel</th>
                        
                    </tr>
                </tbody>
                
                </table>        
                </div>
                </div>
    </div>
    <!--------------------------------------form------------------->
 
          
    <!------------------------------------------------------info----------------------------------->

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
              <p class="mb-0">Computer Teacher</p>
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
    </div> <br>
<div class="container">
        <div class="col-lg-12 shadow-lg mt-5">
        <h2 class="text-center">Stay Updated</h2>
        <p>Join our newsletter and keep up to date with the latest available candidate and jobs<p>
        <form action="subcribe.php" method="POST">
        <div class="form-inline">
               Email: &nbsp; <input type="email"  class="form-control" placeholder="exampls@gmail.com" required name="email">&nbsp;
                Name: &nbsp;<input type="text"  class="form-control" placeholder="Name" required name="inst">&nbsp;
                Category: &nbsp;<input type="text" class="form-control" placeholder="Employer or Job Seeker" required name="nick" >&nbsp; <br><br>
                <button type="submit" class="btn btn-danger" name="sub">Subscribe</button>
                </div>
                </div>
            </form>
    </div>
    </div>
      <!-----------------------------------------------------Our Clients------------------------------>
<div class="container-fluid blockquote mt-5 bg-light">
        <h3 class="text-center">Our Partner</h3>
        <p class="text-center"> We give you opportunity to work with the leading company</p>
    <div class="row">
        <div class="col-lg-2 ">
            <img class="client" src="icons/114333.png">
            <p>Multi-Links Plc</p>
        </div>
        <div class="col-lg-2">
            <img class="client" src="icons/1161490.png">
            <p>Opec Property</p>
        </div>
        <div class="col-lg-2">
            <img class="client" src="icons/1262434-84.png">
            <p>Bank of Industry</p>
        </div>
        <div class="col-lg-2">
            <img class="client" src="icons/1444594-84.png">
            <p>TillyTech</p>
        </div>
        <div class="col-lg-2">
           <img class="client" src="icons/263136.png">
           <p>Aso Guard Ltd</p>
        </div>
        <div class="col-lg-2">
            <img class="client" src="icons/907830.png">
            <p>Cargo Airline</p>
        </div>
    </div>
  
</div> 
    <!-----------------------------------------------------Footer------------------------------>
  <?php require 'footer.php' ?>

  <script src="js/recruit.js"></script>
    </body>