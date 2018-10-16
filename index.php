<?php
	require '_partials/header.php';

	if ( $_POST['date'] ) {
		$date = $_POST['date'];
	}
	else {
		$date = date("Y-n-j");
	}

	$sql = " SELECT * FROM ordered WHERE date = '$date' ";
	$data = $database->query($sql);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p><h1>Planovane servisne ukony na dany den</h1></p>
			<p>
				<a class="btn btn-primary" href="add-order.php">Pridat termin</a>
			</p>
			<form action="" method="post">
				<div class="form-group">
					<input class="form-control" type="date" name="date">	<br>
					<button type="submit" class="btn btn-primary">Vyhladaj den</button>
				</div>
			</form>
			<table class="table table-striped padding-top">
				<thead>
					<tr>
						<th>Datum</th>
						<th>Cas</th>
						<th>Klient</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<?php
						while ( $item = $data->fetch_assoc() ) {
							echo '<tr>';
							echo '<td>' . $item['date'] . '</td>';
							echo '<td>' . $item['time'] . '</td>';
							echo '<td>' . $item['ordered'] . '</td>';
							echo '<td class="links"><a href="/edit-order.php?id=' . $item['id'] . '"><i class="far fa-edit"></i></a><a href="/delete-order.php?id=' . $item['id'] . '"><i class="fa fa-times delete-link"></i></a></td>';
							echo '</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
	require '_partials/footer.php';
?>
