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

<!--sukurti forma (el.pastas, klausimo tema, vardas)
email-siuntimas.php faile ivesti visus varototjo -->

<form class="" action="email-siuntimas.php" method="post">

  El.pasto adresas: <input type="email" name="el_pastas"><br>;
  Klausimo tema: <input type="text" name="tema"><br>;
  <textarea name="klausimas" rows="8" cols="80"></textarea>;
  Vardas:<input type="text" name="vardas"><br>;
  <button type="submit">Klausti</button>

</form>



        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
