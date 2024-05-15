<?php

require_once '../connect.php';

$FormID = $_POST['FormID'];
$FormName = $_POST['FormName'];

mysqli_query($conn, "UPDATE `FormOfEd` SET `FormName` = '$FormName' WHERE `FormOfEd`.`FormID` = '$FormID'");

header('Location: ../../adminspage/formofed.php');