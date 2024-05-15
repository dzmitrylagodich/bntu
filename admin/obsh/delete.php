<?php
require_once '../connect.php';

$Dorm = $_GET['DormsID'];

mysqli_query($conn, "DELETE FROM `Dorms` WHERE `Dorms`.`DormsID` = '$Dorm'");

header('Location: ../../adminspage/obshej.php');