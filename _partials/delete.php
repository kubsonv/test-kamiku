<?php

require '../_inc/config.php';

$service_id = $_POST['id'];
$short_desc = $_POST['short-desc'];
$service = $_POST['service'];
$car_id = $_POST['car_id'];

$sql = " DELETE FROM service_records WHERE id = '$service_id' ";
$data = $database->query($sql);

// success
if ( $data ) {
	header("Location: $base_url" . "/record.php?car_id=" . $car_id);
	die();
}

?>
