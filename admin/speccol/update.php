<?php

require_once '../connect.php';

$collegeID = $_POST['collegeID'];
$ProgramID = $_POST['ProgramID'];

mysqli_query($conn, "UPDATE `СollegeSpecialties` SET `ProgramID` = '$ProgramID' WHERE `СollegeSpecialties`.`collegeID` = '$collegeID'");

header('Location: ../../adminspage/speccol.php');