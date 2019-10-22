<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
        <h1>Prekes is txt failo</h1>

        <?php

        function test()
        {
            static $a = 0;
            echo $a;
            $a++;
        }

        test();
        test();
        test();

        // funkcija kuri iskviecia pati save 10 kartu. funkcija galima nutraukti su return.
        function rekursija()
        {
            static $i = 0;
            $i++;
            if ($i < 10) {
                rekursija ();
                echo $i. "<br/>";
            }
        }

        rekursija();



        ?>


        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
<!--        <script type="text/javascript" src='main.js'> </script>-->
    </body>
</html>
