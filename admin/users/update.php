<?php

require_once '../connect.php';

$id = $_POST['id'];
$FirstName = $_POST['FirstName'];
$SecondName = $_POST['SecondName'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($conn, "UPDATE `users` SET `FirstName` = '$FirstName', `SecondName` = '$SecondName', `email` = '$email',`password` = '$password'  WHERE `users`.`id` = '$id'");

header('Location: ../../adminspage/users.php');