/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var firstArray = "Karpador setzt Platscher ein.....";
var secArray = "Aber nichts passiert....";
var out = "";
var out2 = "";
var interval;
firstArray = firstArray.split("");
secArray = secArray.split("");
var i = 0;
var j = 0;
function splash() {
    output = document.getElementById("errorOut");
    if (i < firstArray.length) {
        out = out + firstArray[i];
        output.innerHTML = out;
        i++;
    } else {
        out = ""; 
        setTimeout(failed, 1000);
    }
}
function failed() {
    clearInterval(interval);
    interval = setInterval(failed, 100);
    output = document.getElementById("errorOut");
    if (j < secArray.length) {
        out = out + secArray[j];
        output.innerHTML = out;
        j++;
    } 
}

interval = setInterval(splash, 100);







