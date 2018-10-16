<?php
require '../_inc/config.php';

$id = $_POST['id'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];
$evidenceNm = $_POST['evidenceNm'];
$vin = $_POST['vin'];
$engine = $_POST['engine'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];

$sql = " UPDATE customers SET `brand` = '$brand', `model` = '$model', `year` = '$year', `evidenceNm` = '$evidenceNm', `vin` = '$vin', `engine` = '$engine', `firstName` = '$firstName', `lastName` = '$lastName', `telephone` = '$phone', `mail` = '$mail' WHERE idCustomer = '$id' ";
$data = $database->query($sql);

// success
if ( $data ) {
	header("Location: $base_url/records.php");
die();
}

?>
