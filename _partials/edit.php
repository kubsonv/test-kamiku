<?php

require '../_inc/config.php';

$service_id = $_POST['id'];
$short_desc = $_POST['short-desc'];
$service = $_POST['service'];
$date = $_POST['date'];
$car_id = $_POST['car_id'];

$sql = " UPDATE `service_records` SET `short_desc` = '$short_desc', `service` = '$service', `date` = '$date' WHERE id = '$service_id' ";
$data = $database->query($sql);

// success
if ( $data ) {
	header("Location: $base_url" . "/record.php?car_id=" . $car_id);
	die();
}

?>
