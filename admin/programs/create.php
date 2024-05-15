<?php

require_once '../connect.php';

$ProgramID = $_POST['ProgramID'];
$Name = $_POST['Name'];
$ReceptionPlan = $_POST['ReceptionPlan'];
$TrainPeriod = $_POST['TrainPeriod'];
$Base = $_POST['Base'];
$FormID = $_POST['FormID'];
$MoneyID = $_POST['MoneyID'];
$ExamID = $_POST['ExamID'];
$AdmissionPlanOfLastYearID = $_POST['AdmissionPlanOfLastYearID'];

mysqli_query($conn,"INSERT INTO `Programs` (`ProgramID`, `Name`,`ReceptionPlan`,`TrainPeriod`,`Base`,`FormID`,`MoneyID`,`ExamID`,`AdmissionPlanOfLastYearID`) VALUES ('$ProgramID','$Name','$ReceptionPlan','$TrainPeriod','$Base','$FormID','$MoneyID','$ExamID','$AdmissionPlanOfLastYearID')");

header('Location: ../../adminspage/programs.php');