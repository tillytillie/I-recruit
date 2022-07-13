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
    <div class="container"><a href="../log/index.php" class="navbar-brand scrollTo "><h3>I-Recruit</h3></a>
 
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
  <div class="row">
 
      <div class="col-lg-12 shadow-lg mr-auto ml-auto mt-5">
    <p class="text-justify mt-5"><b class="text text-center">
There you go Now you don’t have to worry about how to go about your job search and interview during the
COVID-19 pandemic.
</b></p>
<p class="text">INTERVIEW Questions Are </p>
<ul class="list-styled">
<li>Tell me about your work experience. </li>
<li>How much work experience do you have?</li>
<li>Do you have any work experience in a related field? </li>
<li>How does your prior experience prepare you for this job? </li>
<li>Describe your related experience. </li>
<p class="text-justify"> How many years of experience do you have as.....? <br>
This is one of the common open-ended questions asked in any job interview, whether you are
fresher or an experience done. When you apply for a job, you often submit your resume to out line your past work experience
and training to impress your employer. In such cases, your employer has likely already reviewed
your application and is familiar with your experience and background.
Now, you are asked to describe your work experience in detail, which also gives you a chance to
highlight your work experience, achievements and also share valuable expertise that is related
to the new job you are applying for. </p>


<li>What do employers check in your resume or want to find out?</li>
<li>Where you worked previously?</li>
<li>For how long you held each job?</li>
<li>Why you left the position?</li>
<li>Why your background and experience would be a good fit for this job.</li>
</ul>

<li class="text-justify ">Why do employers ask about work experience? <br>
Hiring managers ask these questions to get a better understanding of how your background and
work experience relate to the position they are looking to fill.
Interviewers always expect the candidates to be able to explain and demonstrate their past/
current work experience in detail at the interview. At the same time, they a real so checking your
honesty.
Always Remember. An employer is looking to hire a candidate who is willing to solve a problem
for the company, whether that’s boosting sales or giving the best customer service.
</li>
<br>
<li class="text-justify">Should you still apply for a job if you don’t have enough experience? <br>

There is a scenario that of ten happens. You may find the perfect job vacancy. The description
sounds like it is made for you, but under job requirements, it is mentioned that" You must have 2
years of experience in the related field."

In such cases, you may wonder, <i>what to do next? </i>
Don't worry. It is still worth applying for the position. According to Don Goodman, if you have 2
years of experience and they are looking for 3-5 years, that doesn't affect you, you could still be
qualified.
If you don't have enough experience, you must be ready to prove your skills and talent that may
help to perform the job tasks very well. </li>
<br>

<li class="text-justify">What if you don't have any job experience?  <br>
If you are fresher, then this question sounds like it is made for you. Right?
You must be positive and think about the skill and knowledge you’ve acquired from other jobs,
internships or any of your volunteer work and prove how they helped you get at ask or project
done.
According to the World Economic Forum, employers often check following things in college
graduates, complex problem solving, people management, critical thinking, creativity and
judgment, and decision making.
Try to draw connections between the job you’re applying for and your coursework, skill
development experiences or any kind of productive activities you engaged in throughout college.

As per Linkedin, "one in five hiring managers consider volunteer work experience a valuable
asset when considering candidates."
</li>
<br>
<important>
<b>Key points</b> <br>
<ul>
<li>Don't make any negative remarks about your past or present manager, your fellow employees,
or the company you are working for.</li>
<li> Don’t memorize your answers.</li>
<li>Always try to remember what you have mentioned in the CV before you face the interview.</li>
<li>Back up your example of how past work might prepare you for the new role.</li>
<li>Don't give a negative impression taking too much time on thinking about your joining date, old
salaries,etc.</li>
<li>Describe your past responsibilities and accomplishments in detail.
<li>Always be positive and focus on what you have learned from your experience.
<li>Connect your previous responsibilities to those listed in the job description for the new
position.</li>
<li>Describe to them your job roles, responsibilities, about the company, and the tenure you
worked in the past.</li>
<li>Have examples and stories to tell in the interview of how you learned something or how you
solved a problem at a previous position. </li>
</ul>
 </important>
      </div>
      <div class="col-lg-12">
      
      </div>
  </div>

