<?php

require_once '../connect.php';

$SpecialityBntuID = $_POST['SpecialityBntuID'];
$Name = $_POST['Name'];
$ReceptionPlan = $_POST['ReceptionPlan'];
$TrainPeriod = $_POST['TrainPeriod'];
$EntrySubjectsID = $_POST['EntrySubjectsID'];
$FakultetID = $_POST['FakultetID'];


mysqli_query($conn,"INSERT INTO `SpecialityBntu` (`SpecialityBntuID`, `Name`, `ReceptionPlan` , `TrainPeriod` , `EntrySubjectsID`, `FakultetID`) VALUES ('$SpecialityBntuID','$Name','$ReceptionPlan', '$TrainPeriod','$EntrySubjectsID','$FakultetID')");

header('Location: ../../adminspage/Spec.php');