<h3>Aufbau</h3>
<p>Wie ein einzelnes Bit mit zwei Transistoren gespeichert wird, kann sehr einfach mit der folgenden Schaltung gezeigt werden (siehe Grafik).</p>

<img src='../expo_images/bitTransistorNachbau_schema.png'
     alt='Transistoren, Widerstände und LED als Schaltschema'
     title='Zwei Transisitoren, um mittels Flip-Flop ein Bit zu speichern' />
     
     <p>Die Schaltung wird auch «bistabile Kippstufe» oder «Flip-Flop» genannt. Die beiden LEDs (Licht emittierenden Dioden) zeigen dabei den Stromfluss an, was auch angibt, welcher der beiden Transistoren gerade durchgeschaltet (geöffnet) ist. </p>
    
<h3>Funktionsweise</h3>

     <p>Ist dabei einer der beiden Transistoren geschaltet, so entfällt die Basisspannung am zweiten Transistor (Der Strom «will» lieber durch den geöffneten Transistor fließen, als durch den 56k Ω Basis-Vorwiderstand). Der zweite Tranistor wird somit geperrt.
    Dadurch wiederum wird am ersten Transistor die Basisspannung erhalten bleiben und er behält seinen eingeschalteten Zustand.</p>
     <p>Fazit: Es leuchtet immer nur eine der beiden Dioden.</p>


    <h3>Verwendung</h3>
    <p>Natürlich wird in der Praxis nicht jedesmal eine Leuchtdiode (LED) vorgeschlatet, um ein einzelnes Bit zu speichern. Im Wesentlichen "weiß" die Schaltung, ob das Bit gesetzt (true / 1 / on) oder nicht gesetzt ist (false / 0 / off). Dabei wird lediglich eine der beiden Seiten geprüft, denn der zweite Transitror verhält sich automatisch und immer entgegengesetzt.</p>


<?php includeImage();      ?>
    
                   
    
<h3>Geschichte</h3>
     <p class="zit copy">Die Flipflopschaltung wurde 1918 von den Engländern William Henry Eccles und Frank W. Jordan an rückgekoppelten Radioröhrenverstärkern auf der Suche nach Zählschaltungen entdeckt. Ursprünglich erhielt sie die Bezeichnung Eccles-Jordan-Schaltung.</p>
     <p class="zit src" >Wikipedia 2018</p>


                   
<h3>Fun-Facts</h3>
                   <p>Das Flip-Flop auf dem Foto wurde 2017 bei der <a href='https://www.santis-training.ch'>SANTIS Training AG</a> im <a href='https://www.it-basislehrjahr.ch'>Basislehrjahr</a> gebaut. Ein Schüler durfte dafür eigens bei der Firma <a href='https://www.distrelec.ch'>Distrelec</a> vorbeischauen und die beiden roten Aus-Taster abholen, welche wir ausschließlich für diese Schaltung anschaffen mussten.</p>

                   <p>Werden bei den Basis-Vorwiderständen noch Kondensatoren eingebaut, kann mit einfachen Mitteln eine <a href='https://de.wikipedia.org/wiki/Multivibrator'>astabile Kippstufe</a> gebaut werden. Dies entspricht im Wesentlichen einem Blinklicht. Ein solches kann am Fahrrad montiert werden; ohne die LEDs kann die astabile Kippstufe als Taktgeber benutzt werden.</p>
    
<h3>Weitere Informationen</h3>

    <p>Auf Wikipedia ist das <a href='https://de.wikipedia.org/wiki/Flipflop'>Flip-Flop</a> im Detail erklärt.</p>