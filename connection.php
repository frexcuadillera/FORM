<?php
	
	define("DSN","mysql:host=localhost;dbname=covid19-survey-responses");
	define("DBUSER","root");
	define("DBPASS","");

	try {

		$conn = new PDO(DSN, DBUSER, DBPASS);

	} catch (PDOException $e) {

		print "Error: " . $e->getMessage()  . "<br>";

		die();

	}

?>