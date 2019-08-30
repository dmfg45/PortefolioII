<?php

require("functions.php");

db_connection();

$query = "SELECT * FROM `users` ";
$query .="WHERE username == $_POST['username'] && ";
$query .="$_POST['password']"; 

mysql_query($connection,$query);




 ?>