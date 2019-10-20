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
        <h1>MAILER</h1>

        <form action="email.php" method="post">
            
            <label for="tema">
            <input type="text" name="tema" placeholder="Enter topic" id = "tema">
            <br>

            <label for="klausimas">
            <textarea name="klausimas" id = "klausimas" rows="8" cols="80"></textarea>
            <hr>

            <label for="email">
            <input type="email" name="email" placeholder="Enter your email" id = "email">
            <br>

            <label for="klausimas">
            <input type="text" name="name" placeholder="Optional" id = "name">
            <br>
            <button type="submit">Klausti</button>

        </form>



        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
