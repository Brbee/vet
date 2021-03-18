<?php 
$host = "localhost:3308";
$user = "root";
$pass = "root";
$database = "animal";

$connection = mysqli_connect("$host", "$user", "$pass","$database") or die(mysqli_error($connection));
?>