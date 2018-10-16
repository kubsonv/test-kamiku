<?php

require '../_inc/config.php';

$date = $_POST['date'];
$time = $_POST['time'];
$ordered = $_POST['ordered'];

$sql = " INSERT INTO ordered ( date, time, ordered ) VALUES( '$date', '$time', '$ordered' ) ";
$data = $database->query($sql);

//success
if ( $data ) {
	header("Location: $base_url");
	die();
}

?>
