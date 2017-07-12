<?php
$servername = "iris-tech-azure-app-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@iris-tech-azure-app-mysqldbserver";
$password = "dev@tech2";
$dbname = "mysqldatabase49658";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$ism = $_GET['id'];

echo "welcome to azure ".$ism."";


?>
