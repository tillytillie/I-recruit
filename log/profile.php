<?php
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
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
         <link rel="stylesheet" href="">
         
          <!--------------------------------JS style link----------------->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <!--------------------------------JS style link----------------->
          <script src=""></script>
    <title>User Profile: I-Recruiter</title>
<style>
*{
  padding: 0;
  margin: 0;
}
.sidebar {
  background: linear-gradient(rgba(0,0,0,.7),rgba(0,0,0, .9)),
  url(../img/2497.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  box-shadow: 5px 7px 25px #999;

}
.bottom-border {
  border-bottom: 1px groove #eee;
}
.dropdown-bar{
  background: linear-gradient(rgba(0,0,0,.7),rgba(0,0,0, .9)),
  url(../img/2497.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  box-shadow: 5px 7px 25px #999;
  width: 100%;
}
.drop {
  margin-top: 510px;
}
  
.sidebar-link{
  transition: all .4s;
}
.sidebar-link:hover {
background-color: #444;
border-radius: 5px;
}
</style>
</head>
<body>
  
<!---------------------------------profile code-------------------->
<nav class="navbar navbar-expand-md navbar-light">
  <button type="button" data-toggle="collapse" data-target="#navbarcollapse"
  aria-controls="navbarSupportedContent" aria-expanded="false"
   aria-label="Toggle navigation"
  class="navbar-toggler navbar-toggler-right">
  <span class="fa fa-bars"></span></button>
  <div id="navbarcollapse" class="collapse navbar-collapse">
<div class="container-fluid">
<div class="row">
<!---------sidebar------->
<div class="col-lg-3 fixed-top sidebar ">
<a href="index.php" class="navbar-brand text-white d-block mx-auto text-center py-3 
mb-4 bottom-border">I-Reruiter</a>
<div class="bottom-border pb-3">
<img src="../img/defaultprofilepix.jpg" width="50" class="rounded-circle mr-3">

<a href="#" class="text-white text-capitalize lead"><?=$_SESSION['username']?></a>
</div>

<!------------------------------side bar continue------------------------>

</select></a></li>


 <ul class="navbar-nav flex-column">
  <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
  <i class="fa fa-file-pdf-o text-white fa-lg mr-3">
 </i>My CV</a></li>

 <ul class="navbar-nav flex-column">
  <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
  <i class="fa fa-bullseye text-white fa-lg mr-3">
 </i>  Skills </a></li>

 <ul class="navbar-nav flex-column">
  <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
  <i class="fa fa-certificate text-white fa-lg mr-3">
 </i>Certificates</a></li>

 <ul class="navbar-nav flex-column">
  <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
  <i class="fa fa-check-circle-o text-white fa-lg mr-3">
 </i> Working Experices</a></li>
</ul> 

<ul class="navbar-nav flex-column">
  <li class="nav-item"><a href="index.php?logout='1'"class="nav-link text-white p-3 mb-2 sidebar-link btn  btn-danger"> 
  <i class="fa fa-signout-alt text-white fa-lg mr-3">
 </i> Logout</a></li>
</ul> 
</div>


<div class="col-lg-9 ml-auto bg-dar fixed-top py-2 drop">
<div class="row">
<div class="col-row-4">
</div>
</div> 
<!------------------------------end of dropdown button
<div class="col-md-5">
  <h4 class="text-white"><i class="fa fa-file-word-o mr-3"></i> Logout</h4>
</div>
</div>
</div>
</nav>

</body>

</html>
