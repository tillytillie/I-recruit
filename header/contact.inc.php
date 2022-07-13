<?php 

 $name=['name'];
$email=['email'];
$subject=['subject'];
$message=['message'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $db = mysqli_connect('localhost', 'id10258748_tilly', '53pn7^1#hSEZHppm', 'id10258748_database');
    $query="INSERT INTO contact_us(Name, Email,Subject,Message) 
    VALUES ('$name', '$email', '$subject', ' $message')";
    mysqli_query($db, $query);
    if($query)
    header('location:../log/index.php');
}