<?php

require_once '../connect.php';

$id = $_POST['id'];
$FirstName = $_POST['FirstName'];
$SecondName = $_POST['SecondName'];
$email = $_POST['email'];
$Password = $_POST['Password'];
mysqli_query($conn,"INSERT INTO `Users` (`id`, `FirstName`, `SecondName`, `email`, `Password`) VALUES ('$id','$FirstName','SecondName','email','Password')");

header('Location: ../../adminspage/users.php');