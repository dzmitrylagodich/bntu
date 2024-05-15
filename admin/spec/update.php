<?php

require_once '../connect.php';

$SpecialityBntuID = $_POST['SpecialityBntuID'];
$Name = $_POST['Name'];
$ReceptionPlan = $_POST['ReceptionPlan'];
$TrainPeriod = $_POST['TrainPeriod'];
$EntrySubjectsID = $_POST['EntrySubjectsID'];
$FakultetID = $_POST['FakultetID'];

mysqli_query($conn, "UPDATE `SpecialityBntu` SET `Name` = '$Name', `ReceptionPlan` = '$ReceptionPlan', `TrainPeriod` = '$TrainPeriod', `EntrySubjectsID` = '$EntrySubjectsID', `FakultetID` = '$FakultetID' WHERE `SpecialityBntu`.`SpecialityBntuID` = '$SpecialityBntuID'");

header('Location: ../../adminspage/Spec.php');