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

 <style>
/*------------------footer-------------------------*/

.footer {
    background-color: rgba(14, 9, 9, 0.7);
    color: white;
    margin-bottom: 0px;
   
}

.footer hr {
    background-color: white;
    margin: auto;
    width: 40%;
}

.fa-facebook {
    color: #3B5998;
}

.fa-twitter {
    color: #55ACEE;
}

.fa-whatsapp {
    color: skyblue;
}

.fa-heart-o {
    color: red;
}
.contact-us {
    color: white;
    cursor: pointer
}
.contact-us:hover {
    color: pink;
}
@media only screen and (max-width: 750px) {
    .footer {
        text-align: center; }
    
    }

</style>
 <!-----------------------------------------------------Footer------------------------------>
   <footer>
        <div class="footer  container-fluid mt-5 blockquote">
        <div class="row">
        <div class="col-lg-6">
        <h3>Social Link</h3>
        <ul class="list-inline social-icon">
         <li class="list-inline-item"><i class="fa fa-facebook"></i> Facebook</li>
        <li class="list-inline-item"><i class="fa fa-twitter"></i> Twitter</li>
        <li class="list-inline-item"><i class="fa fa-whatsapp"></i> WhatsApp</li>
        <li class="list-inline-item"><i class="fa fa-linkedin"></i> Linkedln</li>
      
         </div>
         <div class="col-lg-6">
         <a href="header/contact.php" class="contact-us">Contact Us</a>
   
         <li class="list-unstyled"> <h5>Download I-Report App</h5>
         </ul> 
        </div>
        </div>
        <hr>

        <div class="container text-center">
        <p>Copyright &copy; <?php $current=date('Y'); print_r($current)?> TillyTech <i class="fa fa-heart-o"></i></p>
  

        </div>
        </div>
       

   </footer>
   