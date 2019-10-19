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

<!-- sukurti FORMA -->
<!-- elpastas, klasusimo tema, klausimas, vardo,    -->
<!-- email-siuntimas.php faile   - isvesti visu ivestus duomenis -->
    <form   action="email-siuntimas.php" method="post">
        <input type="text" name="tema" placeholder="KLausimo tema"><br />
        <textarea          name="klausimas" rows="8" cols="80"></textarea><br />

        <input type="email" name="elpastas" placeholder="Jusus el.pastas"><br />
        <input type="text" name="vardas" placeholder="Jusu vardas"><br />

        <button type="submit" > Klausti </button><br />
    </form>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
