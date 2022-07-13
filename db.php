<?php

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'database');
if(!$db) {
    die('connection failed' . mysqli_connect());
}