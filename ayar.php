<?php
	try{
		$vt = new PDO("mysql:host=rapicaus.com;dbname=rapicaus_dbblog;charset=utf8;",
		"rapicaus_ahmet", "sifre");
	}catch(PDOExeption $ahmet) {
		echo $ahmet->getMessage();
	}
?>
