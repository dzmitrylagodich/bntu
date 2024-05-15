<?php

require_once '../connect.php';

$FormID = $_POST['FormID'];
$FormName = $_POST['FormName'];

mysqli_query($conn,"INSERT INTO `FormOfEd` (`FormID`, `FormName`) VALUES ('$FormID','$FormName')");

header('Location: ../../adminspage/formofed.php');