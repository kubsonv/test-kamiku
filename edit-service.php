<?php
	require ('_partials/header.php');

	$id = $_GET['id'];
	$car_id = $_GET['car_id'];
	$sql = " SELECT * FROM `service_records` WHERE id = $id ";
	$data = $database->query($sql);
	$record = $data->fetch_array(MYSQLI_ASSOC);
?>

<div class="container">
	<div class="col-md-12">
		<form action="_partials/edit.php" method="post">
			<h1 class="padding-top">Uprava servisneho zaznamu</h1>
			<div class="form-group">
				<label for="short-desc">Kratky popis servisu</label>
				<input type="text" name="short-desc" id="short-desc" class="form-control" value="<?php echo $record['short_desc']; ?>">
				<br>
				<label for="date">Datum servisu</label>
				<input type="text" name="date" id="date" class="form-control" value="<?php echo $record['date']; ?>">
				<br>
				<label for="service">Servisne ukony</label>
				<textarea name="service" id="service" cols="30" rows="10" class="form-control"><?php echo $record['service']; ?></textarea>
				<input type="hidden" name="id" id="id" value="<?php echo $record['id']; ?>">
				<input type="hidden" name="car_id" id="car_id" value="<?php echo $car_id; ?>">
			</div>
			<button type="submit" class="btn btn-warning">Ulozit zmenu</button>
			<a href="<?php echo $base_url . "/record.php?car_id=" . $car_id ; ?>" class="back-link text-muted">spat</a>
		</form>
	</div>
</div>

<?php require ('_partials/footer.php'); ?>
