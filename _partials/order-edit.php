<?php

require '../_inc/config.php';

$id = $_POST['id'];
$date = $_POST['date'];
$time = $_POST['time'];
$ordered = $_POST['ordered'];

$sql = " UPDATE `ordered` SET `date` = '$date', `time` = '$time', `ordered` = '$ordered' WHERE id = '$id' ";
$data = $database->query($sql);

//success
if ( $data ) {
	header("Location: $base_url");
	die();
}

?>
