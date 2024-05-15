<?php

require_once '../connect.php';

$MoneyID = $_POST['MoneyID'];
$Finance = $_POST['Finance'];
$Price = $_POST['Price'];

mysqli_query($conn, "UPDATE `Finance` SET `Finance` = '$Finance',`Price` = '$Price' WHERE `Finance`.`MoneyID` = '$MoneyID'");

header('Location: ../../adminspage/finance.php');