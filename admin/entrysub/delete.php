<?php
require_once '../connect.php';

$EntrySubjects = $_GET['EntrySubjectsID'];

mysqli_query($conn, "DELETE FROM `EntrySubjects` WHERE `EntrySubjects`.`EntrySubjectsID` = '$EntrySubjects'");

header('Location: ../../adminspage/entrysub.php');