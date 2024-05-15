<?php
require_once '../connect.php';

$MoneyID = $_GET['MoneyID'];
$Finance = $_GET['Finance'];
$Price = $_GET['Price'];

mysqli_query($conn, "DELETE FROM `Finance` WHERE `Finance`.`MoneyID` = '$MoneyID'");

header('Location: ../../adminspage/finance.php');