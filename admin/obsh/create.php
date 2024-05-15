<?php

require_once '../connect.php';

$DormsID = $_POST['DormsID'];
$Name = $_POST['Name'];
$Adress = $_POST['Adress'];
$amountofspace =$_POST['amountofspace'];
$CollegeID = $_POST['CollegeID'];

mysqli_query($conn,"INSERT INTO `Dorms` (`DormsID`, `Name`, `Adress`,`amountofspace`, `CollegeID`) VALUES ('$DormsID','$Name','$Adress','$amountofspace','$CollegeID')");

header('Location: ../../adminspage/obshej.php');
