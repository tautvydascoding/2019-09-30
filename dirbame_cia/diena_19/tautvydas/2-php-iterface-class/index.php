<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>mokomes php abstrakcios klases</h1>
        <?php
include_once('a.php');


// UZDUOTIS 3:
// susikurti objekta klases A
$A_obj = new A();

// UZDUOTIS 3.2:
// 1. atspausdinti svori
echo $A_obj->getSvoris() . "<br />";
// 2. pakeisti svori i 90
$A_obj->setSvoris(90);
// 3. atspausdinti svori
echo $A_obj->getSvoris() . "<br />";

         ?>

    </body>
</html>
