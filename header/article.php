
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
    .mySlides {
      display:none ;
    }

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

<br><br><br>  

<div class="container">
  <div class="row">
 
      <div class="col-lg-12 shadow-lg mr-auto ml-auto mt-5">
      <p class="text text-center text-danger"><b>COVID19 PANDEMIC </b></p>
    <p class="text-justify"><b class="text text-center"> 5 Ways The COVID-19 Pandemic Will Affect Your Job Search And What You Can Do To
Prevent. </b> <br>
A few months ago,the world was moving along nicely with different events humans have come
to expect. But out of the blue,the COVID-19 pandemic has put a great spinon thing swith
astounding effects.
Virtually all areas of life are affected, and the job market is not leftout. As a result, more job
seekers are looking for great ways to improve their efforts. In line with that, here are 5 ways the
pandemic will impact your job search, and what you can do about them.</p>
  
  <p class="text-justify"><b> Restricted Movement</b><br>
You can’t move around like you used to. Infact, most organizations are closed, and don’t require
your presence. It’s a great problem a lot of people,including those seeking for employment have
to deal with.
The best way to deal with this is to increase networking. Sure, events, gatherings and a lot more
are put off. But there’s the Internet along with other tools to help you keep intouch. This way,
you’re ready when things get back to normal. It’s a great way to prevent there strictionson
movement from affecting your job search.</p>
  
  <p class="text-justify"><b> Impromptu Delays and Cancellations </b> <br>

Delays and cancellations are often unannounced thanks to the global pandemic. Organizations
will tell you to hold off on your applications or cancel scheduled meetings and interviews with
you. However, don’t let this affect your job search because not all all parts of organizations are
shutdown.
On your part, don’t stop applying or following upon applications. This will help you stay
prepared, and ones tepa head of the rest.</p>
  
  <p class="text-justify"><b>The Time Factor</b><br>
Now, more than ever, you probably have alot of time to spare. This can affect your job search 
negatively because the process slows, and you feel the clock can’t tick fast enough. Whatyou
can do is use the extratime to think things through. Examine your career, learn new things, and
develop more to boost your professional profile. You can do that with online courses, and
temporary jobs. </p> 

  <p class="text-justify"><b class="text text-center">Difficulties in Negotiating</b> <br>
It’s okay being inquisitive about how much a potential employer pays. However, the COVID-19
pandemic has put many job searches at a disadvantage thanks to its impact on the economy as
a whole. So negotiating for a suitable salary might feel awkward.
What you can do is wait a little for the economy to pickup. Optimize your CV during this time,
build your profile, and wait eagerly to discuss your worth should you be invited for an interview.
<br> <br>
<b> Conclusion </b>
There you go. Now you don’t have to worry about how to go about your job search during the
COVID-19 pandemic.  
  </p>
</div>

<div class="col-lg-12 shadow-lg mr-auto ml-auto mt-5">
      <p class="text text-center text-danger"><b>THE MISTAKES GRADUATES MAKE WHEN JOB HUNTING</b></p>
    <p class="text-justify">
  <b> 1. Applying only for jobs that you are skilled in </b> <br>
Most times you are told to apply only for jobs you qualify for but this doesn’t mean that you
don’t apply for jobs where you only miss a few skills.
Take for example, if you don’t have knowledge in Excel and a Diplomal in Communication yet the
job requires that you do, you can still apply for the job is fall you are missing is knowledge in
Excel.
Some companies are willing to train new employees if they think they are good enough and as
such you might end up getting the job. So don’t limit yourself when it comes to making job
applications but you also have to be realistic and honest with yourself.
<br><br>

<b>2. Ignoring low paying jobs </b> <br>
A common mistake graduates make is only applying for well paying jobs. This is mostly
because they want to live  a good life and the fact that in school you are always told that
studying will get you a well paying job.
The problem with this is every one has to start somewhere and some have to start lower than
others. You need to be willing to gain experience first because that is what will determine your
pay.
You cannot expect to be paid the same as someone with 3years experience yet you have none.
You need to earn it, so you have to be willing to workhard to prove you deserve the high pay.
<br> <br>
 
<b>3. Not preparing for the interviews </b> <br>
This is one of the biggest mistakes graduates make when job hunting. It is completely
unacceptable to go into an interview blank. You need to have done your research and practised
your answers to the very common interview questions.
Before walking into any interview you need to have proper research on the company be it what it
does, its products etc and you also need to make sure you are upto date on the latest trends in your
field of profession.

<br><br>
<b>3. You don’t want to relocate </b> <br>

This is sometimes a touchy subject for some people. Are you willing to leave your home and
friends for a job? If you have ever turned down a job just because of the location then you need
to be come more flexible.
In the current job market getting a job is not easy, you should therefore, take any chance to gain
experience as long as it is safe and it makes sense. You need to be smart when it comes to
deciding because you might be missing out on a great opportunity.

<br> <br> 
<b> 4. Accepting the very first job offer </b> <br>
Another common mistake graduates make when job hunting is running to take the very first job
offer they get. Sometimes this offer isn’t really the best but because you do not want to be
jobless any longer you end up taking it. Remember, this is the time for you to discover what you want and what yours kills are you
should therefore be open minded and don’t give up even though you have been jobless for a
 while. Job hunting is never easy and you should be prepared to put in work, however,if done correctly
you will not have to stay jobless for very long.
<br> <br> 

<b> 5. Professional CV, resume and coverletter. </b> <br>

I will not be saying much on this because have been doing that on several occasions.
Your CV, resume and cover letter should be well tailored, structured and professional.
Not more than two pages or maximum of 3 if it's entail more content.
Within two minutes, I should be able to go through all what your CV entail.
CV must be attractive to the reader.

    </p>
      <br>
</div>
      <div class="col-lg-12 shadow-lg mr-auto ml-auto mt-5">
      <p class="text text-center text-danger text-uppercase"><b>Know this before applying for jobs</b></p>
    <ul class="text-justify">
<li> As you applying for this jobs don't go and loose an opportunity like my friend lost one
yesterday, this people will call the number on your CV expect their calls. Here is how my friend
lost out, he was attending an online class when this people call came in and they kept on calling
him like 3 times and he kept on buzzing their call still after the online and he got a WhatsApp
message from them, that they just finished analyzing his CV and they were impressed with the
CV and wants to meet with him but it seems like he is already occupy and boom that was what
happened oh. <br> He has asked me to share with you guys to be always ready and be expecting
companies are still recruiting. My prayer is they reconsider him, I have asked him to WhatsApp
the HR specialist that contacted him and explain to them he was have an online class which
was very important to him at that moment. </li>
<li> Make sure you have ZOOM app on your phone for online interview purpose. </li>
<li> Put your WhatsAppnumber on yourCV, make sure your phone number is always on please.</li> </ul>
</div>
  </div></div></body>