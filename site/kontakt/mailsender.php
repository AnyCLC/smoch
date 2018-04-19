<?php
/**
 * Author: Scacco/Avesani/Gressly
 * Date: 2014
 */
	$Name = $_GET["textN"];
	$EMail = $_GET["textE"];
	$Text = $_GET["textT"];
	$to = "SantisMOCH@gmail.com";
	$subject = "Formular SMOCH";
	$message = "Name:".$Name."\n"."E-Mail:".$EMail."\n"."Nachricht:".$Text."wurde gesendet";
	$headers = "from:".$EMail;
	mail($to, $subject, $message, $headers);
	header ("Location: Danke.php");
?>
