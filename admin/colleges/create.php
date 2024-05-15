<?php

require_once '../connect.php';

$collegeID = $_POST['collegeID'];
$collegeName = $_POST['collegeName'];
$Adress = $_POST['Adress'];
$Director = $_POST['Director'];
$City = $_POST['City'];
$tell = $_POST['tell'];
$email = $_POST['email'];
mysqli_query($conn,"INSERT INTO `colleges` (`collegeID`, `collegeName`, `Adress`, `Director`, `City`,`tell`,`email` ) VALUES ('$collegeID','$collegeName','$Adress','$Director','$City','$tell','$email')");

header('Location: ../../adminspage/colleges.php');