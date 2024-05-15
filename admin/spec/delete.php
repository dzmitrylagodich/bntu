<?php
require_once '../connect.php';

$SpecialityBntu = $_GET['SpecialityBntuID'];


mysqli_query($conn, "DELETE FROM `SpecialityBntu` WHERE `SpecialityBntu`.`SpecialityBntuID` = '$SpecialityBntu'");

header('Location: ../../adminspage/Spec.php');