<?php
require_once '../connect.php';

$Program = $_GET['ProgramID'];

mysqli_query($conn, "DELETE FROM `Programs` WHERE `Programs`.`ProgramID` = '$Program'");

header('Location: ../../adminspage/programs.php');