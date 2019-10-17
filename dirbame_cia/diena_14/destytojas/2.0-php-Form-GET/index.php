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
        <h1>Isijunk console (narsykleje)</h1>

         <p>
             1. index.php faile sukurti HTML form'a naudojant metoda (GET) ir  su ivedimo laukais:
              vardas, pavarde, telefonas, mygtukas 'registruotis'
                <br />
             2. kai paspaudzia 'registruotis', vartotoja perkelti i registracija.php faila (formoje action='registracija.php')
                <br />
             3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti vartotojo ivestu duomenis
             pvz.:
             print_r( $_GET);
             <br />
         </p>
         <form   action="registracija.php" method="get">
                <input type="text" name="vardas" placeholder="Jusu vardas" >
                <input type="text" name="pavarde" placeholder="Jusu pavarde">

                <button type="submit"  > Registruotis </button>
                <input type="submit"  value="Registruotis"> 
         </form>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
