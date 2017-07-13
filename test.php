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
    echo "connection failed";
}
$ruche_id = $_GET['ruche_id'];


$sql = "INSERT INTO `mysqldatabase49658`.`data`
(`ruche_id`,
`temperature1`,
`temperature2`,
`humidite1`,
`count`,
`cap_bat`,
`lati`,
`longi`)
VALUES
(<{ruche_id: }>,
<{temperature1: 0}>,
<{temperature2: 0}>,
<{humidite1: 0}>,
<{count: 0}>,
<{cap_bat: 0}>,
<{lati: 0}>,
<{longi: 0}>);";




echo "welcome to azure, ".$ruche_id."";


?>
