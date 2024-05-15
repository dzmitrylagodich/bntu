<?php

require_once '../connect.php';

$ID = $_POST['ID'];
$FirstName = $_POST['FirstName'];
$SecondName = $_POST['SecondName'];
$email = $_POST['email'];
$Password = $_POST['Password'];
mysqli_query($conn,"INSERT INTO `Users` (`ID`, `FirstName`, `SecondName`, `email`, `Password`) VALUES ('$ID','$FirstName','SecondName','email','Password')");

header('Location: ../../adminspage/users.php');