<?php

require_once '../connect.php';

$AdmissionPlanOfLastYearID = $_POST['AdmissionPlanOfLastYearID'];
$admission_year = $_POST['admission_year'];
$Points = $_POST['Points'];

mysqli_query($conn, "UPDATE `AdmissionPlanOfLastYear` SET `admission_year` = '$admission_year', `Points` = '$Points' WHERE `AdmissionPlanOfLastYear`.`AdmissionPlanOfLastYearID` = '$AdmissionPlanOfLastYearID'");

mysqli_query($conn, "UPDATE `AdmissionPlanOfLastYear` SET `admission_year` = '$admission_year', `Points` = '$Points' WHERE `AdmissionPlanOfLastYear`.`AdmissionPlanOfLastYearID` = '$AdmissionPlanOfLastYearID'");

header('Location: ../../adminspage/plannab.php');