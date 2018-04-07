<!DOCTYPE html>
<!--
Autor: Nathan Péray
Date:  20.03.2018
-->
<?php
    include_once './res/db_config.php';
	include_once './res/functions.php';

	$args = explode('/',$_SERVER['REQUEST_URI']);
    $IDurl = $args[sizeof($args) - 1];
    mysqli_query($db, "SET NAMES 'utf8'");
    $abfrage = 'SELECT * FROM `content` WHERE `IDurl` = "' . $IDurl .  '"';

    $ergebnis = mysqli_query($db, $abfrage);
  
    if($row = mysqli_fetch_assoc($ergebnis)) {
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
        header ('Location: ../error.html');
    }
?>

<html>
    <head>
        <meta name="autor" content="<?php echo $autor; ?>">
        <meta name="description" content="<?php echo $descriptions; ?>">
        <meta name="keywords" content="<?php echo "$IDurl, $keywords"; ?>">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/main.css"   >
        <link rel="stylesheet" type="text/css" href="../css/header.css" >
        <link rel="stylesheet" type="text/css" href="../css/footer.css" >
        <link rel="stylesheet" type="text/css" href="../css/nav.css"    >
        <link rel="stylesheet" type="text/css" href="../css/content.css">
        <link rel="stylesheet" type="text/css" href="../css/media.css"  >
        <script src="../js/main.js"></script>
        <title><?php echo $titel ?></title>
    </head>
    <body onscroll="stickyNavi()">
        <div id="headwrapper" onclick="window.location = '../index.html'">
        	<div class="gradient">
                <div class="articletitle"><?php echo $titel ?></div>
                <div class="headtitle">S M O C H</div>
        	</div>
        </div>
        <div id="content">
            
            <div class="navwrapper">
                <div class="topnav">
                                    <?php
                                    if (isset($vorher)) {
                                        echo    "<div class='navlast'>
                                                <a class='navlink' href=$vorher>&#171;</a>
                                                </div>";
                                    }
                                    ?>
                                    <a class="navtitle"><?php echo $titel ?></a>
                                    <a class="navjahr"><?php echo $jahrzahl ?></a>
                                    <?php 
                                    if (isset($nachher)) {
                                        echo    "<div class='navnext'>
                                                <a class='navlink' href=$nachher>&#187;</a>
                                                </div>";
                                    }
                                    ?>
                    
                </div>
            </div>
            <div id="contentwrapper">
                <div id="articlewrapper">
                    <?php
                    include_once './artikel_html/' . $IDurl . '.php';
                    ?>
<?php
/***************** Vorhandene Exponate in der Fußnote ****************************/
istImMuseumText($modellObj, $jahrzahlObt, $vorhanden);
/********************************************************************************/
?>
                </div>
                
            </div>
        </div>
        <div id="footwrapper">
            <div class="adress">
                <div class="centercolumn">
                    <p>
                        <strong>SANTIS Training AG</strong>
                        <br>Hohlstrasse 550
                        <br>CH-8048 Zürich
                    </p>
                    <p>
                        Tel: <a href="tel:+41 044 316 10 10" class="tel">+41 044 316 10 10</a>
                        <br><a class="fax">Fax: +41 044 316 10 11</a>
                    </p>
                </div>
            </div>
            <div class="hours">
                <div class="centercolumn">
                    <p>
                        <strong>Öffnungszeiten</strong>
                        <br>08:00 – 11:45 Uhr
                        <br>13:30 – 17:00 Uhr
                    </p>
                </div>
            </div>
            <div class="etc">
                <div class="centercolumn">
                    <p>
                        <a href="../kontakt.html">Kontakt</a>
                        <br><a href="https://santis-training.ch">SANTIS Training AG</a>
                        <br> :-D
                    </p>
                </div>
            </div>
            <div class="impressum">
                Copyright © 2018, <a href="https://www.santis-training.ch/">SANTIS Training AG</a>
            </div>
        </div>
    </body>
</html>

