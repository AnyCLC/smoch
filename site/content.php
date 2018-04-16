<!DOCTYPE html>
<!--
	Autor: Nathan Péray
	Date:  20.03.2018
-->
<?php
	include_once 'res/db_config.php';
	include_once 'res/functions.php';
	include_once 'res/db_query.php' ;
	$IDurl = getIDurl();
	if($row = getExponatRow($IDurl)) {
		$titel        = $row['Titel'        ];
		$bildlegende  = $row['BildLegende'  ];
		$bildpfad     = $row['BildPfad'     ];
		$jahrzahl     = $row['Jahrzahl'     ];
		$jahrzahlObj  = $row['Objekt_Jahr'  ];
		$modellObj    = $row['Objekt_Modell'];
		$vorher       = $row['Vorher'       ];
		$nachher      = $row['Nachher'      ];
		$autor        = $row['Autor'        ];
		$descriptions = $row['Descriptions' ];
		$keywords     = $row['Keywords'     ];
		$vorhanden    = $row['Vorhanden'    ];
	} else {
		header ('Location: ../error.php');
	}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="autor"       content="<?php echo $autor; ?>" />
		<meta name="description" content="<?php echo $descriptions; ?>" />
		<meta name="keywords"    content="<?php echo keyWordList($IDurl, $titel, $keywords);?>" />
		<meta name="viewport"    content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/main.css"   >
		<link rel="stylesheet" type="text/css" href="../css/header.css" >
		<link rel="stylesheet" type="text/css" href="../css/footer.css" >
		<link rel="stylesheet" type="text/css" href="../css/nav.css"    >
		<link rel="stylesheet" type="text/css" href="../css/content.css">
		<script src="../js/main.js"></script>
		<title><?php echo $titel ?></title>
	</head>

	<body>
		<div id="headwrapper" onclick="window.location = '../index.php'">
			<div class="gradient">
			<div class="articletitle"><?php echo $titel ?></div>
				<a href='../index.php' class="headtitle">S M O C H</a>
			</div>
		</div> <!-- end headwrapper -->

		<div id="navwrapper">
			<div class='navtable'>
<?php
if (isset($vorher)) {
	echo "				<a class='nav navarrow navlast' href='$vorher'>&nbsp;<span>Zum vorangehenden Exponat</span></a>";
}
?>
				<span class="nav navtitle"><?php echo $titel    ?></span>
				<span class="nav navjahr" ><?php echo $jahrzahl ?></span>
<?php 
if (isset($nachher)) {
	echo "				<a class='nav navarrow navnext' href='$nachher'>&nbsp;<span>Zum nächsten Exponat.</span></a>";
}
?>

			</div> <!-- end navtable -->
		</div> <!-- navwrapper -->

		<div id="articlewrapper">

        <!-- vvvvvvvvvvvvvvvvvvvvvvvvvv CONTENT: vvvvvvvvvvvvvvvvvvvvvvvvvvvv -->
<?php
	include_once './artikel_html/' . $IDurl . '.php';
?>

	<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

<?php
/***************** Vorhandene Exponate in der Fußnote ****************************/
istImMuseumText($modellObj, $jahrzahlObj, $vorhanden);
/********************************************************************************/
?>
		</div> <!-- end articlewrapper -->

<?php include_once 'footwrapper.php'; ?>

	</body>
</html>