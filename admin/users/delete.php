<?php
require_once '../connect.php';

$ID = $_GET['ID'];

mysqli_query($conn, "DELETE FROM `Users` WHERE `Users`.`ID` = '$ID'");

header('Location: ../../adminspage/users.php');