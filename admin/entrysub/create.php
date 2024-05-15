<?php

require_once '../connect.php';

$EntrySubjectsID = $_POST['EntrySubjectsID'];
$Subjects = $_POST['Subjects'];

mysqli_query($conn,"INSERT INTO `EntrySubjects` (`EntrySubjectsID`, `Subjects`) VALUES ('$EntrySubjectsID','$Subjects')");

header('Location: ../../adminspage/entrysub.php');