<?php require ('_inc/config.php') ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Kamiku autoservis</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/css/bootswatch.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/all.min.css">
	</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<div class="container">
		<a class="navbar-brand" href="<?php echo $base_url; ?>">KAMIKU</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo $base_url; ?>">Domov <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="records.php">Zaznamy</a>
		      </li>
		      <li class="nav-item">
		      	<a class="nav-link" href="add-car.php">Pridat auto</a>
		      </li>
		    </ul>
		    <form action="searched.php" class="form-inline my-2 my-lg-0" method="post">
		      <input class="form-control mr-sm-2" name="searched" id="searched" type="text" placeholder="Vyhladavanie">
		      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Vyhladaj</button>
		    </form>
		  </div>
	</div>

	</nav>
