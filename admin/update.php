<?php

require_once 'connect.php';

$ExamID = $_POST['ExamID'];
$Name = $_POST['Name'];

mysqli_query($conn, "UPDATE `Exam` SET `Name` = '$Name' WHERE `Exam`.`ExamID` = '$ExamID'");

header('Location: ../adminspage/admin.php');