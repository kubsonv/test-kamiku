<?php
	require '_partials/header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="_partials/order-add.php" method="post" class="padding-top">
				<fieldset>
					<legend>Objednanie klienta</legend>
					<div class="form-group">
						<label for="date">Zadajte datum terminu</label>
						<input class="form-control" type="date" name="date" id="date">
					</div>
					<div class="form-group">
						<label for="time">Priblizny cas prichodu klienta</label>
						<input class="form-control" type="time" name="time" id="time">
					</div>
					<div class="form-group">
						<label for="ordered">Klient</label>
						<input class="form-control" type="text" name="ordered" id="ordered">
					</div>

					<button class="btn btn-success" type="submit">Objednanie</button>
					<a href="<?php echo $base_url ; ?>" class="back-link text-muted">spat</a>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<?php
	require '_partials/footer.php';
?>
