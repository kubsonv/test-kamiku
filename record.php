<?php
	require ('_partials/header.php');

	$car_id = $_GET['car_id'];
	$sql = " SELECT * FROM service_records WHERE car_id = '$car_id' ";
	$data = $database->query($sql);
	$record = $data->fetch_array(MYSQLI_ASSOC);

	$sql2 = " SELECT * FROM customers WHERE idCustomer = '$car_id' ";
	$data2 = $database->query($sql2);
	$car = $data2->fetch_array(MYSQLI_ASSOC);
?>

<div class="container padding-top">
	<div class="row">
		<div class="col-sm-4">
			<img src="assets/img/default-photo.jpg" alt="default-photo" class="car-photo">
		</div>
		<div class="col-sm-8">
			<a href="edit-car.php?id=<?php echo $car_id; ?>" class="edit-link"><i class="far fa-edit"></i></a>
			<h1><?php echo $car['brand'] . " " . $car['model']; ?> <span class="year">( <?php echo $car['year']; ?> )</span></h1>
			<p>
				<strong>SPZ : </strong><?php echo $car['evidenceNm']; ?> <br>
				<strong>VIN : </strong><?php echo $car['vin']; ?> <br>
				<strong>Motor : </strong><?php echo $car['engine']; ?> <br>
				<strong>Tel. c. : </strong><a href="tel:+421<?php echo $car['telephone']?>">+421<?php echo $car['telephone']; ?></a> <br>
				<strong>Mail : </strong><a href="mailto:<?php echo $car['mail']; ?>"><?php echo $car['mail']; ?></a>
			</p>
			<a href="add-service.php?car_id=<?php echo $car_id; ?>" class="btn btn-success float-to-right">Pridat zaznam</a>
		</div>
	</div>
	<div class="row padding-top">
		<table class="table table-striped">
			<thead>
				<th>Datum</th>
				<th>Kratky popis</th>
				<th>Opravy</th>
				<th>&nbsp;</th>
			</thead>
			<tbody>
<?php
	foreach ( $data as $item ) {
		echo "<tr>";
		echo "<td>" . $item['date'] . "</td>";
		echo "<td>" . $item['short_desc'] . "</td>";
		echo "<td>" . $item['service'] . "</td>";
		echo '<td><a href="/edit-service.php?id=' . $item['id'] . '&car_id=' . $car_id . '"><i class="far fa-edit"></i></a> <a href="/delete-service.php?id=' . $item['id'] . '&car_id=' . $car_id . '"><i class="fas fa-times delete-link"></i></a></td>';
		echo "</tr>";
	}
?>
			</tbody>
		</table>
	</div>
</div>


<?php require ('_partials/footer.php'); ?>
