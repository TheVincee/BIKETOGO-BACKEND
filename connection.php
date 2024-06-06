<?php 
$dbhost = "localhost";
$username = "root";
$password = "";
$dbname = "bike-to-go";

$conn = mysqli_connect($dbhost, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Something went wrong: " . mysqli_connect_error());
}

?>
