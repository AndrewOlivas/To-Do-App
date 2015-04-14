<?php
// gets your username,password and the task column from localhost
$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
if ($mysqli->maxdb_connect_error) {
	// $mysqli->connect_error then we want it to die and have this message
	die('connect error('. $mysqli>connect_errno .')'
		.$mysqli->connect_error);
	
}
else{
	// when a connection is made this echo pops up
	echo "Conection made";
}
$mysqli->close();



?>