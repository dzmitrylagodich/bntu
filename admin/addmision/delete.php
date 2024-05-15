<?php
require_once '../connect.php';

$Program = $_GET['ProgramID'];

mysqli_query($conn, "DELETE FROM `Admission` WHERE `Admission`.`ProgramID` = '$Program'");

header('Location: ../../adminspage/addmision.php');