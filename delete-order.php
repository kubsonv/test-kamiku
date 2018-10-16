<?php
	require '_partials/header.php';

	$id = $_GET['id'];
	$sql = " SELECT * FROM `ordered` WHERE id = $id ";
	$data = $database->query($sql);
	$record = $data->fetch_array(MYSQLI_ASSOC);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form id="delete-order" action="_partials/order-delete.php" method="post" class="padding-top">
				<fieldset>
					<legend>Vymazanie objednania klienta</legend>
					<div class="form-group">
						<label for="date">Zadajte datum terminu</label>
						<input class="form-control" type="date" name="date" id="date" disabled value="<?php echo $record['date']; ?>">
					</div>
					<div class="form-group">
						<label for="time">Priblizny cas prichodu klienta</label>
						<input class="form-control" type="time" name="time" id="time" disabled value="<?php echo $record['time']; ?>">
					</div>
					<div class="form-group">
						<label for="ordered">Klient</label>
						<input class="form-control" type="text" name="ordered" id="ordered" disabled value="<?php echo $record['ordered']; ?>">
						<input type="hidden" name="id" id="id" value="<?php echo $record['id']; ?>">
					</div>

					<button class="btn btn-danger" type="submit">Vymazat zaznam</button>
					<a href="<?php echo $base_url ; ?>" class="back-link text-muted">spat</a>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<?php
	require '_partials/footer.php';
?>
