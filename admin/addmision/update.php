<?php

require_once '../connect.php';

$ProgramID = $_POST['ProgramID'];
$SpecialityBntuID = $_POST['SpecialityBntuID'];

mysqli_query($conn, "UPDATE `Admission` SET `SpecialityBntuID` = '$SpecialityBntuID' WHERE `Admission`.`ProgramID` = '$ProgramID'");

header('Location: ../../adminspage/addmision.php');