<?php

require '../_inc/config.php';

$short_desc = $_POST['short-desc'];
$date = $_POST['date'];
$service = $_POST['service'];
$car_id = $_POST['car_id'];

$sql = " INSERT INTO service_records ( short_desc, date, service, car_id ) VALUES( '$short_desc', '$date', '$service', '$car_id' ) ";
$data = $database->query($sql);

// success
if ( $data ) {
	header("Location: $base_url" . "/record.php?car_id=" . $car_id);
	die();
}

?>
