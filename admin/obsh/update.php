<?php

require_once '../connect.php';

$DormsID = $_POST['DormsID'];
$Name = $_POST['Name'];
$Adress = $_POST['Adress'];
$amountofspace =$_POST['amountofspace'];
$collegeID = $_POST['collegeID'];

mysqli_query($conn, "UPDATE `Dorms` SET `Name` = '$Name', `Adress` = '$Adress',`amountofspace` = '$amountofspace', `collegeID` = '$collegeID' WHERE `Dorms`.`DormsID` = '$DormsID'");

header('Location: ../../adminspage/obshej.php');