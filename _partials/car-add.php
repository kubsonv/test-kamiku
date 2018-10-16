<?php
require '../_inc/config.php';

$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];
$evidenceNm = $_POST['evidenceNm'];
$vin = $_POST['vin'];
$engine = $_POST['engine'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];

$sql = " INSERT INTO customers ( brand, model, year, evidenceNm, vin, engine, firstName, lastName, telephone, mail ) VALUES( '$brand', '$model', '$year', '$evidenceNm', '$vin', '$engine', '$firstName', '$lastName', '$phone', '$mail' ) ";
$data = $database->query($sql);

if(!empty($_FILES['uploaded_file']))
  {
    $path = "assets/img";
    $path = $path . basename( $_FILES['car-image']['name']);
    if(move_uploaded_file($_FILES['car-image']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['car-image']['name']).
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }

// success
if ( $data ) {
	header("Location: $base_url/records.php");
die();
}

?>
