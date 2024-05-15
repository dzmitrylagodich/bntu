<?php

require_once '../connect.php';

$AdmissionPlanOfLastYearID = $_POST['AdmissionPlanOfLastYearID'];
$admission_year = $_POST['admission_year'];
$Points = $_POST['Points'];


mysqli_query($conn,"INSERT INTO `AdmissionPlanOfLastYear` (`AdmissionPlanOfLastYearID`, `admission_year`,`Points`) VALUES ('$AdmissionPlanOfLastYearID','$admission_year','$Points')");

header('Location: ../../adminspage/plannab.php');