<?php
require_once '../connect.php';

$FakultetID = $_GET['FakultetID'];

mysqli_query($conn, "DELETE FROM `fakultet` WHERE `fakultet`.`FakultetID` = '$FakultetID'");

header('Location: ../../adminspage/fakultets.php');