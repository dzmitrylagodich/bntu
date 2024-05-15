<?php
require_once '../connect.php';

$Form = $_GET['FormID'];

mysqli_query($conn, "DELETE FROM `FormOfEd` WHERE `FormOfEd`.`FormID` = '$Form'");

header('Location: ../../adminspage/formofed.php');