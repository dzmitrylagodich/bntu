<?php

require_once 'connect.php';

$ExamID = $_POST['ExamID'];
$Name = $_POST['Name'];

mysqli_query($conn,"INSERT INTO `Exam` (`ExamID`, `Name`) VALUES ('$ExamID','$Name')");

header('Location: ../adminspage/admin.php');