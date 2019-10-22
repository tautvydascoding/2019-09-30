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
        <h1>Isijunk console (narsykleje)</h1>

<!--        sukurti forma-->
<!--        elpastas, klausimo tema, klausimas, vardo, -->
        <form action="email-siuntimas.php" method="post">
            <input type="email" name="elpastas" placeholder="iveskite el-pasta" > <br>
            <input type="text" name="klausimo_tema" placeholder="iveskite tema" > <br>
            <textarea type="text" name="klausimas" placeholder="iveskite klausima" > </textarea> <br>
            <input type="text" name="vardas" placeholder="iveskite varda" > <br>
            <button type="submit"> Klausti </button>

        </form>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
<!--        <script type="text/javascript" src='main.js'> </script>-->
    </body>
</html>
