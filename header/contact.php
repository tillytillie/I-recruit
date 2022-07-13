
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
              .bgimg {
        /* Background image */
        background-image: url('../img/contact2.jpg');
        /* Full-screen */
        height: 100%;
        /* Center the background image */
        background-position: center;
        /* Scale and zoom in the image */
        background-size: cover;
        /* Add position: relative to enable absolutely positioned elements inside the image (place text) */
        position: relative;
        /* Add a white text color to all elements inside the .bgimg container */
    }
 
              </style>
</head>
<body>
<header class="header">

<nav class="navbar navbar-expand-lg fixed-top bg-info ">
    <div class="container"><a href="../loginsystem/welcome.php" class="navbar-brand scrollTo "><h3>I-Recruit</h3></a>
 
        <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
        <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto blockquote">
            <li class="nav-item"><a href="article.php" class="nav-link link-scroll">Articles</a></li>
             <li class="nav-item"><a href="skill.php" class="nav-link link-scroll">Skills</a></li>
                <li class="nav-item"><a href="resume-cover-letter.php" class="nav-link link-scroll">Resume & Cover Letter</a></li>
                <li class="nav-item"><a href="interview.php" class="nav-link link-scroll">Interviews</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link link-scroll">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
</header>
<div id="contact-page" class="container mt-5 pt-5">
        <div class="bg">
            <div class="row">           
                <div class="col-sm-12">                                                                        
                    <div id="gmap" class="contact-map">
                    </div>
                </div>                  
            </div>      
            <div class="row">   
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Get In Touch</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" action="contact.inc.php" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                            </div>                        
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-info pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Contact Info</h2>
                        <address>
                            <p>I-Recruit Inc.</p>
                            <p>935 SW. Iwo road Ibadan,</p>
                            <p>Oyo State</p>
                            <p>Mobile: +2348035583068</p>
                            <p>Email: info@i-recruit.com</p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">Social Networking</h2>
                            <ul>
                                <li>
                                    <a href="#">Facebook <i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#">Twitter <i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#">Google Plus <i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#">Youtube <i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>              
            </div>  
        </div>  
    </div><!--/#contact-page-->
    