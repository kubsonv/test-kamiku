<?php
require '../_inc/config.php';

$id = $_GET['id'];

$sql = " DELETE FROM customers WHERE idCustomer = '$id' ";
$data = $database->query($sql);

// success
if ( $data ) {
	header("Location: $base_url/records.php");
die();
}

?>
