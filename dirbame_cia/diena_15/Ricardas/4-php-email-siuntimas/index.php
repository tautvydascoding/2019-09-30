<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>Isijunk console (narsykleje)</h1>

        <form action="email.php" method="post">
            <textarea type="text" name="klausimas" value="" placeholder="Jusu klausimas" rows="8" cols="80"></textarea><br>
            <input type="text" name="tema" value="" placeholder="Klausimo tema">
            <input type="email" name="mailas" value="" placeholder="Jusu el. pastas">
            <input type="text" name="vardas" value="" placeholder="Jusu vardas(neprivaloma)"><br>
            <button type="submit">Submit</button>
        </form>
        <?php 
      
        ?>
        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
