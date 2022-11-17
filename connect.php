<!-- connecting to the database -->
<?php
// Variables
$hostname = "localhost";
$database = "crudoperation";
$user = "root";
$password = "";

// Create connection
$con = mysqli_connect($hostname, $user, $password, $database);
// Check connection
if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
}
?>

<!-- http://localhost/crud/connect.php -->

