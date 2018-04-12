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

/**
 * @author git@gress.ly
 * @date   2018-04-12
 * Create a Keywordlist containing the IDUrl and a comma separated list of
 * given keywords from the database.
 * If the title ($title) differs from the $IDurl, the title is added to the
 * keywords as well.
 * @param IDurl   : string id of the "exponate"
 * @param title   : Title in the database
 * @param keywords: Keywords from the database
 * @returns komma separated list of keywords
 */
function keyWordList($IDurl, $title, $keywords) {
	$kwl = ucfirst($IDurl); // keywordlist
	if(0 != (strcmp(strtolower($IDurl), strtolower($title)))) {
		$kwl .= ", " . $title;
	}
	if(strlen($keywords) > 0) {
		$kwl .=  ", " . $keywords;
	}
	return $kwl;
} // end function: keyWordList

?>