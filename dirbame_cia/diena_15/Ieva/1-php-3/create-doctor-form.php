<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="libs/bootstrap/css/bootstrap.min.css">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
        <h1> Naujo gydytojo kurimas </h1>

        <form action = "naujasGydytojas.php" method = "get">

            <label for = "name"> Name: </label>
            <input name = "name" type = "text" placeholder="Enter name" id = "name">
            <br>

            <label for = "lname"> Last Name: </label>
            <input name = "lname" type = "text" placeholder="Enter Last name" id = "lname">
           
           
            <button type = "Submit" name = "registration"  class="btn btn-outline-success">Kurti</button>
               

        </form>

        <br>
        <hr>
        <a href='index.php' class='btn btn-outline-warning'> Atgal         
        </a>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>

        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
