<?php
	require ('_partials/header.php');

	$car_id = $_GET['car_id'];
?>

<div class="container">
	<div class="col-md-12">
		<form action="_partials/add.php" method="post">
			<h1 class="padding-top">Pridanie servisneho zaznamu</h1>
			<div class="form-group">
				<label for="short-desc">Kratky popis servisu</label>
				<input type="text" name="short-desc" id="short-desc" class="form-control" placeholder="Prosim zadajte kratky popis servisu">
				<br>
				<label for="date">Datum servisu</label>
				<input type="text" name="date" id="date" class="form-control" placeholder="Sem zadajte datum vykonaneho servisu">
				<br>
				<label for="service">Servisne ukony</label>
				<textarea name="service" id="service" cols="30" rows="10" class="form-control" placeholder="Prosim zadajte jednotlive servisne ukony aj s cenami"></textarea>
				<input type="hidden" name="car_id" id="car_id" value="<?php echo $car_id; ?>">
			</div>
			<button type="submit" class="btn btn-primary">Pridat</button>
			<a href="<?php echo $base_url . '/record.php?car_id=' . $car_id ; ?>" class="back-link text-muted">spat</a>
		</form>
	</div>
</div>

<?php require ('_partials/footer.php'); ?>
