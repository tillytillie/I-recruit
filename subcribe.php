<?php 
session_start();

$email=['email'];
$inst=['inst'];
$nick=['nick'];

if(isset($_POST['sub'])){
    $email=$_POST['email'];
    $inst=$_POST['inst'];
    $nick=$_POST['nick'];

    $db = mysqli_connect('localhost', 'id10258748_tilly', '53pn7^1#hSEZHppm', 'id10258748_database');
    $query="INSERT INTO job_update(Email,Insterest,NickName) 
    VALUES ('$email', '$inst', '$nick')";
    mysqli_query($db, $query);
    header('location:index.php');
}