<?php
	require '_partials/header.php';

	$id = $_GET['id'];
	$sql = " SELECT * FROM `customers` WHERE idCustomer = $id ";
	$data = $database->query($sql);
	$record = $data->fetch_array(MYSQLI_ASSOC);

?>

<div class="container">
	<div class="col-md-12">
		<form action="_partials/car-edit.php" method="post" class="padding-bottom">
			<h1 class="padding-top">Pridanie auta</h1>
			<div class="form-group">
				<label for="brand">Znacka</label>
				<input type="text" name="brand" id="brand" class="form-control" placeholder="Prosim zadajte znacku auta" value="<?php echo $record['brand']; ?>">
				<br>
				<label for="model">Model</label>
				<input type="text" name="model" id="model" class="form-control" placeholder="Prosim zadajte model auta" value="<?php echo $record['model']; ?>">
				<br>
				<label for="year">Rok vyroby</label>
				<input type="text" name="year" id="year" class="form-control" placeholder="Prosim zadajte rok vyroby auta" value="<?php echo $record['year']; ?>">
				<br>
				<label for="evidenceNm">SPZ</label>
				<input type="text" name="evidenceNm" id="evidenceNm" class="form-control" placeholder="Prosim zadajte SPZ auta" value="<?php echo $record['evidenceNm']; ?>">
				<br>
				<label for="vin">VIN</label>
				<input type="text" name="vin" id="vin" class="form-control" placeholder="Prosim zadajte VIN auta" value="<?php echo $record['vin']; ?>">
				<br><label for="engine">Motorizacia</label>
				<input type="text" name="engine" id="engine" class="form-control" placeholder="Prosim zadajte detaili motorizacie" value="<?php echo $record['engine']; ?>">
				<br>
				<label for="firstName">Meno</label>
				<input type="text" name="firstName" id="firstName" class="form-control" placeholder="Prosim zadajte meno majitela" value="<?php echo $record['firstName']; ?>">
				<br>
				<label for="lastName">Priezvisko</label>
				<input type="text" name="lastName" id="lastName" class="form-control" placeholder="Prosim zadajte priezvisko majitela" value="<?php echo $record['lastName']; ?>">
				<br>
				<label for="phone">Telefonnce cislo</label>
				<input type="text" name="phone" id="phone" class="form-control" placeholder="Prosim zadajte telefonny kontakt majitela" value="<?php echo $record['telephone']; ?>">
				<br>
				<label for="mail">E-mail</label>
				<input type="text" name="mail" id="mail" class="form-control" placeholder="Prosim zadajte e-mail majitela" value="<?php echo $record['mail']; ?>">
				<input type="hidden" name="id" id="id" value="<?php echo $record['idCustomer']; ?>">
				<br>
				<label for="image">Obrazok auta</label>
				<input type="file" name="car-image" id="car-image">
			</div>
			<button type="submit" class="btn btn-warning">Ulozit zmenu</button>
			<a href="<?php echo $base_url . '/record.php?car_id=' . $record['idCustomer']; ?>" class="back-link text-muted">spat</a>
			<a href="_partials/car-delete.php?id=<?php echo $record['idCustomer']; ?>" class="btn btn-danger links" id="delete-car" onclick="return confirm('Are you sure you want to delete this item?');">Vymazat</a>
		</form>
	</div>
</div>

<?php
	require '_partials/footer.php';
?>
