<?php



// f-ja kuri iskveicia pati save 10 kartu "ciklas"
function rekursija() {
    static $i = 0;
    $i++;
    if ($i < 10) {
        echo $i . "<br />";
         rekursija();
    }
}

rekursija();
