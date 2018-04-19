<!DOCTYPE html>
<!-- Kontakt SANTIS BASIS Museum of Computing History -->
<html>
	<head>
		<title>Kontakt</title>
      
		<meta charset  ="utf-8"      />
		<meta name     ="author"
		      content  ="BASIS 2014" />
		<meta name     ="description"
		      content  ="Kontakt"    />
		<meta name     ="keywords"
		      content  ="Kontakt"    />

		<link rel="stylesheet" type="text/css" href="../css/main.css"   >
		<link rel="stylesheet" type="text/css" href="../css/header.css" >
		<link rel="stylesheet" type="text/css" href="../css/footer.css" >
		<link rel="stylesheet" type="text/css" href="../css/content.css">
		<link rel      ="icon"
		      href     ="../img/favicon.ico" type="image/x-icon" />
	</head>

<body>
	<div id='headwrapper'>
    	<div class='gradient'>
			<div class='articletitle'>Kontakt</div>
		</div>
	</div> <!-- end headwrapper-->

	<div id='navwrapper'>
		<a href="../index.php"><img class="home"  title='Link zu Hauptseite' alt="Haus" src="../img/Home.png"  /></a>
    </div>

      
	<div id="articlewrapper">
        <img src="layout/img/mail.png" width='32' title='mail' alt="Briefumschlag"/>
		<form action="mailsender.php">

<table>
	<tr>
		<td>Name, Vorname</td>
		<td><intput type='text' name='textN' /></td>
	</tr>
	<tr>
		<td>E-Mail</td>
		<td><intput type='email' name='textE' /></td>
	</tr>
	<tr>
		<td>Nachricht</td>
		<td><textarea name='textT' cols='50' rows='5'></textarea></td>
	</tr>
</table>
			<input     class="submit" type="submit" value="Senden"/>
		</form>
	</div>

      
<?php include_once '../footwrapper.php'; ?>

	</body>

</html>
