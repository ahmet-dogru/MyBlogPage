<?php
	try{
		$vt = new PDO("mysql:host=rapicaus.com;dbname=rapicaus_dbblog;charset=utf8;",
		"rapicaus_ahmet", "Eskanarya26");
	}catch(PDOExeption $ahmet) {
		echo $ahmet->getMessage();
	}
?>
