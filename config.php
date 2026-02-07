<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "real_estate";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
include("config.php");

echo "Database connected successfully!";
?>
