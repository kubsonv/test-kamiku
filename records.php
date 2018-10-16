<?php
	// phpinfo();
	require ('_partials/header.php');

	$sql = " SELECT * FROM customers ";
	$data = $database->query($sql);
?>

		<div class="container">
			<div class="row">

			</div>
			<div class="row padding-top">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>Znacka a model</th>
								<th>Majitel</th>
								<th>SPZ</th>
								<th>VIN</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while ( $item = $data->fetch_assoc() ) {
									echo "<tr>";
									echo "<td>" . $item['brand'] . " " . $item['model'] . "</td>";
									echo "<td>" . $item['firstName'] . " " . $item['lastName'] . "</td>";
									echo "<td>" . $item['evidenceNm'] . "</td>";
									echo "<td>" . $item['vin'] . "</td>";
									echo '<td><a href="record.php?car_id=' . $item['idCustomer'] . '">detail</a></td>';
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

<?php require ('_partials/footer.php'); ?>
