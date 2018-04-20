<?php
/**
 *	Autor : Ph. Gressly Freimann
 *  Update: 2018-04-16
 */

$args = explode('/',$_SERVER['REQUEST_URI']);
$last_arg =  $args[sizeof($args) - 1];
// Handle Museumsobjekt
if(preg_match("/index.php\/[a-z0-9]+/i", $_SERVER['REQUEST_URI'])) {
	include_once "content.php";
	die;
}

// handle default (ending on index.php):
if(preg_match("/.*index.php$/i", $_SERVER['REQUEST_URI'])) {
    include_once "main.php";
	die;
}

// ending on "index.php/" (SLASH at the end)
if(preg_match("/index.php\/$/i", $_SERVER['REQUEST_URI'])) {
	header('Location: ..');
	die;
}

// ending on slash '/'. Redirect to index.php without /
if(preg_match("/.*\//i", $_SERVER['REQUEST_URI'])) {
		header('Location: ./index.php');
        die;
}

?>