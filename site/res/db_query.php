<?php

/**
 * Extract the Exponat-ID from the url.
 */
function getIDurl() {
	$args = explode('/',$_SERVER['REQUEST_URI']);
	return $args[sizeof($args) - 1];
}

/**
 * Read a single row from the database.
 * The result represents a single "exponat".
 */
function getExponatRow($IDurl) {
	global $db;
	$IDurl    = stripslashes($IDurl); // security
	$abfrage  = 'SELECT * FROM `content` WHERE `IDurl` = "' .$IDurl. '"';
	$ergebnis = mysqli_query($db, $abfrage);
	return mysqli_fetch_assoc($ergebnis);
}

?>