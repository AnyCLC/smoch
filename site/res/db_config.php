<?php

$db = mysqli_connect("localhost", "smochuser", "1234"        , "smoch");
if(!$db)
{
	exit("Verbindungsfehler: " . mysqli_connect_error());
}

if (!mysqli_set_charset($db, "utf8")) {
	echo 'db charset error';
}

mysqli_query($db, "SET NAMES 'utf8'");

?>