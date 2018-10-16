<?php

$base_url = "http://serv.kubson.sk";

// Database connect
$servername = "ip_adress_of_db";
$username = "db_username";
$password = "da_password";
$database = "database";

$database = mysqli_connect( $servername, $username, $password, $database );

if ( !$database ) {
    die( "Connection to local db failed: " . mysqli_connect_error() );
}

?>
