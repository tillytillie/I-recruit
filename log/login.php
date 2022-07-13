<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1,">

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
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header-log">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>