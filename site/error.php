<!DOCTYPE html>
<!--
Autor: Nathan Péray, Daniel Frei
Date:  20.03.2018
-->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"> <!--Fix für html width-->
        <meta name="language" content="de-de">

        <link rel="stylesheet" type="text/css" href="css/main.css"   >
        <link rel="stylesheet" type="text/css" href="css/header.css" >
        <link rel="stylesheet" type="text/css" href="css/footer.css" >
        <link rel="stylesheet" type="text/css" href="css/nav.css"    >
        <link rel="stylesheet" type="text/css" href="css/content.css">
        <link rel="stylesheet" type="text/css" href="css/media.css"  >


				<script src="./js/error.js"></script>
        <script src="./js/main.js"></script>
        <title>Page not Found!</title>
    </head>
    <body onscroll="stickyNavi()">
        <div id="headwrapper">
            <div class="gradient">
                <div class="articletitle">404</div>
                <div class="headtitle">S M O C H</div>
            </div>
        </div>
        <div id="content">
            <div class="navwrapper">
                <div class="topnav">
                    <a class="navtitle startlink" href="./index.php" alt="">ERROR 404</a>
                    <a class="navjahr startlink" href="./index.php" alt="">Zurück zur Startseite</a>
                </div>
            </div>
            <div id="contentwrapper">
                <div id="articlewrapper">
                    <div class="errorwrapper" style='height: 500px;'>
                        <div id="errorImg">
                            <img id="karpador" src="./img/karpador.gif" alt="karpador">
                        </div>
                        <div id="errorTxt">
                            <p id="errorOut"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include_once 'footwrapper.php'; ?>
      
        <script>splash();</script>
    </body>
</html>
        

