<?php

// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=iris-tech-azure-app-mysqldbserver.mysql.database.azure.com;dbname=mysqldatabase49658;charset=utf8', 'mysqldbuser@iris-tech-azure-app-mysqldbserver', 'dev@tech2');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//echo $_POST['title'];
if ('1'=='1'){
	$id_ruche = $_GET['id_ruche'];
	$temperature1 = $_GET['temperature1'];
	$temperature2 = $_GET['temperature2'];
	$humidite = $_GET['humidite'];
	$count=0 ;
	$cap_bat = $_GET['cap_bat'];
	$lati = $_GET['lati'];
	$longi = $_GET['longi'];
	
	
	
	
		
	$sql = "INSERT INTO data( ruche_id, temperature1, temperature2, humidite1, count, cap_bat, lati, longi ) values ('$id_ruche', '$temperature1', '$temperature2', '$humidite', '$count', '$cap_bat', '$lati', '$longi')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
	echo 'Success';
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}


	
?>
