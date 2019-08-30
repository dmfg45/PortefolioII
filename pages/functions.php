<?php

function db_connection()
{
	define("DB_SERVER", "localhost");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "rootroot");
	define("DB_DATABASE", "somedb");


	$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	if (!$connection) {
		
		die("the connection failed");
	}

	else{

		echo"Congrats you're connected";

	}
}

?>