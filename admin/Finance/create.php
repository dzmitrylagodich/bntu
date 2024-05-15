<?php

require_once '../connect.php';

$MoneyID = $_POST['MoneyID'];
$Finance = $_POST['Finance'];
$Price = $_POST['Price'];

mysqli_query($conn,"INSERT INTO `Finance` (`MoneyID`,`Finance`,`Price`) VALUES ('$MoneyID','$Finance','$Price')");

header('Location: ../../adminspage/finance.php');