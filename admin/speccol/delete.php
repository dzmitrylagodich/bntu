<?php
require_once '../connect.php';

$college = $_GET['collegeID'];

mysqli_query($conn, "DELETE FROM `СollegeSpecialties` WHERE `СollegeSpecialties`.`collegeID` = '$college'");

header('Location: ../../adminspage/speccol.php');