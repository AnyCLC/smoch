<?php

/**
 * Hilfsfunktionen
 * Autor: phi@gressly / Nathan Péray
 * 2018-03-20
 */

function includeImage() {
    global $bildpfad;
    global $bildlegende;
    echo    "<div class='imgwrapper'>" .
        "<img src='../expo_images/$bildpfad' class='expoimg' alt='$bildlegende' title='$bildlegende'/>" .
        "</div>";
}


function underConstruction() {
    echo "<div><img src='../img/ucMini.png' alt='teleworker' title='under Construction'/><br />Under Construction</div>";
}

/** 
 * Text für vorhandene Exponate.
 */
function istImMuseumText($modellObj, $jahrzahlObj, $vorhanden) {
    if(! empty ($modellObj) || ! empty ($jahrzahlObj) || ! empty($vorhanden)) {
    echo "<hr />\n";
}
if($vorhanden > 0) {
    echo "<br />Hierzu können Sie ein Exponat im <b>SANTIS Museum of Computing History</b> betrachten.<br />\n";
}
if(! empty ($modellObj) && strlen($modellObj) > 0) {
    if($vorhanden) {
        echo "<br />Bestauenen Sie bei uns: ";
    } else {
        echo "<br />Abbildung zeigt bzw. Text beschreibt: ";
    }
  echo  "<b><span style='color: #036;'>" . $modellObj;
    if(! empty($jahrzahlObj)) {
        echo " aus dem Jahr $jahrzahlObj";
            }
    echo "</span></b>.<br />\n";
    }
}


?>