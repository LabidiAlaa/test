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
$ruche_id = $_GET['ruche_id'];
$temperature1 = $_GET['temperature1'];
$temperature2 = $_GET['temperature2'];
$humidite1 = $_GET['humidite1'];
$count = $_GET['count'];
$cap_bat = $_GET['cap_bat'];
$lati = $_GET['lati'];
$longi = $_GET['longi'];

$sql = "INSERT INTO data(ruche_id, temperature1, temperature2, humidite1, count, cap_bat, lati, longi) values ('$ruche_id', '$temperature1', '$temperature2', '$humidite1', '$count', '$cap_bat', '$lati', '$longi')";




echo "welcome to azure, data successfully stored";


?>
