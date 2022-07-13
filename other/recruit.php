<?php 
session_start();
$fname=['fname'];
$mname=['mname'];
$lname=['lname'];
$pho=['pho'];
$email=['email'];
$pos=['pos'];
$qua=['qua'];

if(isset($_POST['apply'])) {
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $pho=$_POST['pho'];
    $email=$_POST['email'];
    $pos=$_POST['pos'];
    $qua=$_POST['qua'];

    $db = mysqli_connect('localhost', 'id10258748_tilly', '53pn7^1#hSEZHppm', 'id10258748_database');
    $query="INSERT INTO recruit(FirstName, MiddleName, LastName, Phone_No, Email, Position_apply_for, Higher_Quali)
    VALUES('$fname', '$mname', '$lname', '$pho', '$email', '$pos', '$qua')";
    
    mysqli_query($db, $query);
    if($query) {
        echo "<script>alert('Form Submitted Successful')</script>";
    }
    header("location: ../log/index.php");
    exit();
 
 
}
