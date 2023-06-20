<?php

function openConn()
{

	// set variables for database credentials
	$dbhost = "127.0.0.1:3306";
	$dbuser = "u240881417_nick";
	$dbpass = "Alikhver@77";
	$db = "u240881417_equipment";
	
	// Create connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
	
	return $conn;

}

function closeConn($conn)
 {
 $conn -> close();
 }

?>