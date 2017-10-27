<?php 

try {
	$db = new PDO("mysql:host=localhost;dbname=database;port=3306","teamHouse","#6J#axc^RXDVP5*");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Unable to connect";
	// echo $e->getMessage();
	exit;
}

