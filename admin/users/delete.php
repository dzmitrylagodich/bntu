<?php
require_once '../connect.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM `Users` WHERE `Users`.`id` = '$id'");

header('Location: ../../adminspage/users.php');