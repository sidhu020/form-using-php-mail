<?php
    $FName = $_POST['fname'];
    $LName = $_POST['lname'];
    $city = $_POST['city'];

$con = new mysqli('localhost', 'root', 'form data');

if($conn->connect_error)
    {
    die('Connection Failed : ' . $conn->connect_error);
    }else{

    }




?>