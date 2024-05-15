<?php

require_once '../connect.php';

$EntrySubjectsID = $_POST['EntrySubjectsID'];
$Subjects = $_POST['Subjects'];

mysqli_query($conn, "UPDATE `EntrySubjects` SET `Subjects` = '$Subjects' WHERE `EntrySubjects`.`EntrySubjectsID` = '$EntrySubjectsID'");

header('Location: ../../adminspage/entrysub.php');