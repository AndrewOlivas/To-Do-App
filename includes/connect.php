<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
if ($mysqli->maxdb_connect_error) {
	// $mysqli->connect_error then we want it to die and have this message
	die('connect error('. $mysqli>connect_errno .')'
		.$mysqli->connect_error);
	
}
else{
	echo "Conection made";
}
$mysqli->close();



?>