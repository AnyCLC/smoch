<div class='zitwarn'></div>
<h3>Aufbau</h3>
<p>
Der große Speicherchip im Museum ist ein: <br>
(8629ek99 41265-15, Micro uPD41256 DRAM, n-Kanal Silikon Transistor, Speicherchip mit 8 mal 1 MB)<br>
Ein DRAM besteht aus Speicherzellen, die auf der Oberfläche eines <a href="https://de.wikipedia.org/wiki/Die_(Halbleitertechnik)">Dies</a> in einer ausgeklügelten hierarchischen Struktur angeordnet und verdrahtet sind. <br>
Während die innere Struktur herstellerspezifisch aufgebaut ist, ist die von außen sichtbare logische Struktur vom Industriegremium JEDEC normiert. Dadurch wird sichergestellt, dass sich Chips unterschiedlicher Hersteller und verschiedener Größen nach dem immer gleichen Schema ansprechen lassen. </p>
<i>Quelle: <a href="https://de.wikipedia.org/wiki/Dynamic_Random_Access_Memory">Wikipedia</a> März 2018</i>

<h4>Aufbau einer Speicherzelle</h4>
<p>
Der Aufbau einer einzelnen DRAM-Speicherzelle ist sehr einfach, sie besteht nur aus einem Kondensator und einem Transistor.<br>
Heute verwendet man einen MOS-Feldeffekttransistor.
Die Information wird als elektrische Ladung im Kondensator gespeichert. Jede Speicherzelle speichert ein Bit.<br>
Während früher meist Kondensatoren in Planartechnologie Verwendung fanden, werden aktuell zwei andere Technologien verwendet: 
</p>
<?php includeImage(); ?>
<ul>
<li>Bei der Stapel-Technologie (englisch stack) wird der Kondensator über dem Transistor aufgebaut.</li>
<li>Bei der Graben-Technologie (englisch trench) wird der Kondensator durch Ätzen eines ca. 5–10 Mikrometer tiefen Loches (oder Grabens) in das Substrat erzeugt.</li>
</ul>

<i>Quelle: <a href="https://de.wikipedia.org/wiki/Dynamic_Random_Access_Memory">Wikipedia</a> März 2018</i>

<h3>Funktionsweise</h3>
<p>
Die einzelne Speicherzelle ist sehr einfach aufgebaut. Der Zustand einer Zelle und damit die enthaltene digitale Information ist durch Ladungsspeicherung
in einem Kondensator festgehalten. Die Ansteuerung der Zelle übernimmt ein Schalter in Form eines Transistors. Er kann die Ladung im Kondensator isolieren,
oder zum Ein- und Auslesen eines Datums durchschalten. 
<br>
Das Gate des Transistors ist mit einer Wortleitung verbunden. Liegt der Pegel dieser Signalleitung
auf low, dann befindet sich der Transistor im hochohmigen Zustand. Die Ladung des Kondensators ist isoliert und bleibt gespeichert. Zum Schreiben oder
Lesen der Speicherzelle wird der Signalpegel der Wortleitung auf high angehoben. Der Transistor ist jetzt leitfähig und verbindet den Kondensator mit der
Bit-Leitung. Beim Schreiben gleicht sich die Ladung des Kondensators entsprechend dem Pegel der Bitleitung an, auf der die zu schreibende Information liegt
(0 oder 1). 
<br>
Umgekehrt ist es beim Lesen: Vereinfacht gesagt wird die Bitleitung auf den Pegel des Kondensators gehoben. Da die Ladungen der Speicherkondensatoren aber
sehr gering sind, bedarf es noch einiger zusätzlicher elektrischer Maßnahmen, um definierte Signale zu bekommen. 
<br><br>
<i>Quelle: <a href="https://www.tecchannel.de/a/so-funktioniert-dram,401175,2">tecchannel</a> März 2018</i>
</p>

<h3>Verwendung</h3>
<p>
Der erste kommerziell erhältliche DRAM-Chip war 1970 der von Intel vorgestellte Typ 1103. Er enthielt 1024 Speicherzellen (1 KiBit).<br>
Das Prinzip der DRAM-Speicherzelle wurde 1966 von Robert H. Dennard am Thomas J. Watson Research Center von IBM entwickelt. 

Seither wurde die Kapazität eines DRAM-Chips um den Faktor 1 Million gesteigert und die Zugriffszeit auf ein Hundertstel verkürzt. Heute (2014) besitzen
DRAM-Chips Kapazitäten von bis zu 8 GiBit (Single-Die) bzw. 16 GiBit (Twin-Die) und Zugriffszeiten von 6 ns. Die Produktion von DRAM-Speicherchips gehört
zu den umsatzstärksten Segmenten der Halbleiterindustrie. Mit den Produkten wird spekuliert; es existiert ein Spotmarkt.

Anfangs wurden DRAM-Speicher aus einzelnen Speicherbausteinen (Chips) in DIL-Bauform aufgebaut. Für 16 KiB Arbeitsspeicher (zum Beispiel im Atari 600XL oder CBM 8032) wurden 8 Speicherbausteine vom Typ 4116 (16384 Zellen zu 1 Bit) gebraucht. Für 64 KiB wurden 8 Bausteine vom Typ 4164 (
C64
-I) oder 2 Bausteine vom Typ 41464 (C64-II) gebraucht. <br>
IBM-PCs wurden anfangs mit 64 KiB als minimale Speicherausstattung verkauft. Hier wurden allerdings 9 Bausteine vom Typ 4164 gebraucht; der neunte Baustein speicherte die Paritätsbits.
Bevor die SIMMs auf den Markt kamen, gab es zum Beispiel Hauptplatinen für Rechner mit Intel-80386-Prozessoren, die mit 8 MiB Arbeitsspeicher bestückt werden konnten, der aus einzelnen Chips aufgebaut war. Dafür mussten 72 einzelne Chips vom Typ 411000
(1 MiBit) in die Sockel gedrückt werden. Dies war eine langwierige und fehleranfällige Prozedur. Sollte die gleiche Platine mit nur 4 MiB Arbeitsspeicher
bestückt werden, wobei zeitweise die erheblich preiswerteren Chips vom Typ 41256 (256 KiB) anstelle des Typs 411000 verwendet wurden, dann mussten sogar
144 einzelne Chips eingesteckt werden: 9 Chips ergeben 256 KiB, 16 solcher Gruppen mit jeweils 9 Chips ergaben 4 MiB. Größere Chips wurden daher zu Modulen
verlötet, die erheblich weniger Platz benötigten.</p>
<i>Quelle: <a href="https://de.wikipedia.org/wiki/Dynamic_Random_Access_Memory">Wikipedia</a> März 2018</i>


                                                                                                                                                 <h3>Fun Facts</h3>
     <p>Wegen der vielen Beinchen werden Chips auch <i>Käfer</i> genannt.</p>


<h3>Weitere Informationen</h3>
<p>
Im Museum sind daneben die folgenden Speicherchips vorhanden:
<table class='tabelle'>
<tr><td>Bezeichnung</td><td>Beschreibung</td></tr>
<tr><td>MM5270J</td><td>dynamic 4Mbit RAM</td></tr>
<tr><td>P51C256H</td><td>dynamic 256KB RAM</td></tr>
<tr><td>41256-15</td><td>dynamic 1MB RAM</td></tr>
<tr><td>MM5270D</td><td>1Bit DRAM 4K Max.</td></tr>
</table>
</p>

<p>Weitere Informationen finden Sie 
<a href="https://de.wikipedia.org/wiki/Dynamic_Random_Access_Memory">hier</a>.
</p>