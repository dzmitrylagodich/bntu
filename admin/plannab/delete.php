<?php
require_once '../connect.php';

$AdmissionPlanOfLastYearID = $_GET['AdmissionPlanOfLastYearID'];
$admission_year = $_GET['admission_year'];
$Points = $_GET['Points'];


mysqli_query($conn, "DELETE FROM `AdmissionPlanOfLastYear` WHERE `AdmissionPlanOfLastYear`.`AdmissionPlanOfLastYearID` = '$AdmissionPlanOfLastYearID'");

header('Location: ../../adminspage/plannab.php');