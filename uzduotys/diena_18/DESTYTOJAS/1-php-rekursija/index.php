<?php


// paleisti f-ja 10 kartu ir atspausdinti, kuris jau kartas
function rekursija() {
    static $k = 0;
    if ($k < 10) {
        echo " $k -as  kartas <br />";
         $k++;
         rekursija();
     }
}
rekursija();
