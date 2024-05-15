<?php

require_once '../connect.php';

$ID = $_POST['ID'];
$FirstName = $_POST['FirstName'];
$SecondName = $_POST['SecondName'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($conn, "UPDATE `Users` SET `FirstName` = '$FirstName', `SecondName` = '$SecondName', `email` = '$email',`password` = '$password'  WHERE `Users`.`ID` = '$ID'");

header('Location: ../../adminspage/users.php');