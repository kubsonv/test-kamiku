<?php
	require '_partials/header.php';
?>

<div class="container">
	<div class="col-md-12">
		<form action="_partials/car-add.php" method="post" class="padding-bottom">
			<h1 class="padding-top">Pridanie auta</h1>
			<div class="form-group">
				<label for="brand">Znacka</label>
				<input type="text" name="brand" id="brand" class="form-control" placeholder="Prosim zadajte znacku auta">
				<br>
				<label for="model">Model</label>
				<input type="text" name="model" id="model" class="form-control" placeholder="Prosim zadajte model auta">
				<br>
				<label for="year">Rok vyroby</label>
				<input type="text" name="year" id="year" class="form-control" placeholder="Prosim zadajte rok vyroby auta">
				<br>
				<label for="evidenceNm">SPZ</label>
				<input type="text" name="evidenceNm" id="evidenceNm" class="form-control" placeholder="Prosim zadajte SPZ auta">
				<br>
				<label for="vin">VIN</label>
				<input type="text" name="vin" id="vin" class="form-control" placeholder="Prosim zadajte VIN auta">
				<br><label for="engine">Motorizacia</label>
				<input type="text" name="engine" id="engine" class="form-control" placeholder="Prosim zadajte detaili motorizacie">
				<br>
				<label for="firstName">Meno</label>
				<input type="text" name="firstName" id="firstName" class="form-control" placeholder="Prosim zadajte meno majitela">
				<br>
				<label for="lastName">Priezvisko</label>
				<input type="text" name="lastName" id="lastName" class="form-control" placeholder="Prosim zadajte priezvisko majitela">
				<br>
				<label for="phone">Telefonnce cislo</label>
				<input type="text" name="phone" id="phone" class="form-control" placeholder="Prosim zadajte telefonny kontakt majitela">
				<br>
				<label for="mail">E-mail</label>
				<input type="text" name="mail" id="mail" class="form-control" placeholder="Prosim zadajte e-mail majitela">
				<br>
				<label for="image">Obrazok auta</label>
				<input type="file" name="car-image" id="car-image">
			</div>
			<button type="submit" class="btn btn-primary">Pridat</button>
		</form>
	</div>
</div>

<?php
	require '_partials/footer.php';
?>
