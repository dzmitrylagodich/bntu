<?php

require_once '../connect.php';

$FakultetID = $_POST['FakultetID'];
$Name = $_POST['Name'];

mysqli_query($conn, "UPDATE `fakultet` SET `Name` = '$Name' WHERE `fakultet`.`FakultetID` = '$FakultetID'");

header('Location: ../../adminspage/fakultets.php');