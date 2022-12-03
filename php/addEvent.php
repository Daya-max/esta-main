<?php

// Conexion a la base de datos
require_once('bdd.php');
require_once('inf5.php');
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	$start = $_POST['start'];
	$color = $_POST['color'];

	$sql = "INSERT INTO events(title, startt, color) values ('$title', '$start', '$color')";
	
	//echo $sql;

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
