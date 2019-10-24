<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>mokomes php abstrakcios klases</h1>
        <?php
include_once('automobilis.php');
$auto_obj = new Automobilis();
$auto_obj->vaziuoti(5);
$auto_obj->sutoti();

         ?>

    </body>
</html>
