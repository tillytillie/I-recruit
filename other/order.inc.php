<?php 
session_start();


$fullname=['fullname'];
$tel=['tel'];
$email=['email'];
$linkedin=['linkedin'];
$details=['details'];

if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $linkedin=$_POST['linkedin'];
    $details=$_POST['details'];

    $db = mysqli_connect('localhost', 'id10258748_tilly', '53pn7^1#hSEZHppm', 'id10258748_database');

    $query="INSERT INTO cv_and_cover_letter(Full_Name, Phone_Num, Email, Linkedin_url, Full_details) 
    VALUES ('$fullname', '$tel', '$email', '$linkedin', ' $details')";
    mysqli_query($db, $query);
    header('location:../log/index.php');
}