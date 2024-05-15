<?php

require_once '../connect.php';

$collegeID = $_POST['collegeID'];
$collegeName = $_POST['collegeName'];
$Adress = $_POST['Adress'];
$Director = $_POST['Director'];
$City = $_POST['City'];
$tell = $_POST['tell'];
$email = $_POST['email'];

mysqli_query($conn, "UPDATE `colleges` SET `collegeName` = '$collegeName', `Adress` = '$Adress', `Director` = '$Director', `City` = '$City', `tell` = '$tell', `email` = '$email'  WHERE `colleges`.`collegeID` = '$collegeID'");

header('Location: ../../adminspage/colleges.php');