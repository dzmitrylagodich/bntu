<?php
require_once '../connect.php';

$college = $_GET['collegeID'];

mysqli_query($conn, "DELETE FROM `colleges` WHERE `colleges`.`collegeID` = '$college'");

header('Location: ../../adminspage/colleges.php');