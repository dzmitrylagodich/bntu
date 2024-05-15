<?php
require_once 'connect.php';

$Exam = $_GET['ExamID'];

mysqli_query($conn, "DELETE FROM `Exam` WHERE `Exam`.`ExamID` = '$Exam'");

header('Location: ../adminspage/admin.php');