<?php

require_once '../connect.php';

$collegeID = $_POST['collegeID'];
$ProgramID = $_POST['ProgramID'];

mysqli_query($conn,"INSERT INTO `СollegeSpecialties` (`collegeID`, `ProgramID`) VALUES ('$collegeID','$ProgramID')");

header('Location: ../../adminspage/speccol.php');