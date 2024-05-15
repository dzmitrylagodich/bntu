<?php

require_once '../connect.php';

$FakultetID = $_POST['FakultetID'];
$Name = $_POST['Name'];

mysqli_query($conn,"INSERT INTO `fakultet` (`FakultetID`, `Name`) VALUES ('$FakultetID','$Name')");

header('Location: ../../adminspage/fakultets.php');