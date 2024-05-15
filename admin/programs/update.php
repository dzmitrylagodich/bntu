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

mysqli_query($conn, "UPDATE `Programs` SET `Name` = '$Name',`ReceptionPlan` = '$ReceptionPlan',`TrainPeriod` = '$TrainPeriod',`Base` = '$Base',`FormID` = '$FormID',`MoneyID` = '$MoneyID',`ExamID` = '$ExamID',`AdmissionPlanOfLastYearID` = '$AdmissionPlanOfLastYearID' WHERE `Programs`.`ProgramID` = '$ProgramID'");

header('Location: ../../adminspage/programs.php');