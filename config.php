<?php
	define("DB_DRIVER", "mysql:host=localhost; dbname=cms");
	define("DB_SERVER", "root");
	define("DB_SERVER_USERNAME", "root");
	define("DB_SERVER_PASSWORD", "root");
	define("DB_DATABASE", "cms");

	$db = new PDO(DB_DRIVER.':host='.DB_SERVER.';dbname='.DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD);	
?>