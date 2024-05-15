<?php

require_once '../connect.php';

$ProgramID = $_POST['ProgramID'];
$SpecialityBntuID = $_POST['SpecialityBntuID'];

mysqli_query($conn,"INSERT INTO `Admission` (`ProgramID`, `SpecialityBntuID`) VALUES ('$ProgramID','$SpecialityBntuID')");

header('Location: ../../adminspage/addmision.php');