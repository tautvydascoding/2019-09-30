<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="libs/bootstrap/css/bootstrap.min.css">
        <?php include ("db-functions.php")
        ?>
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
        <h1>Isijunk console (narsykleje)</h1>

        <?php
        // UZDUOTIS 1.1: susikurti nauja projekta ir issivesti gydytoja is DB naudojant foreach ir getDoctor($nr) f-ja
        $gyd=getDoctor($prisijungimas,4);
        print_r($gyd);
        echo $gyd['name']."".$gyd['lname']."<br/>";
        echo "{$gyd['name']} {$gyd['lname']}<br/>";
        //arba




        // UZDUOTIS 1.2:
        // be foreach atspausdinti visa gydytojo info
        // <h2> <em>nr</em> vardas pavarde</h2>
  echo "<h2><em></em> {$gyd['name']} </em> {$gyd['lname']}";

        // UZDUOTIS 1.3:
        // su kokiu nors ciklu atspausdinti VISUS gydytojus
        // <h2 class='bg-info   m-1'> vardas pavarde</h2>
echo "<div class='row'>";
        for ($i =1; $i<6; $i++){
          $gyd = getDoctor($prisijungimas,$i);
        include  ('template-item.php');
        }
echo "</div>";
        // UZDUOTIS 1.3.2
        // A) sukurti nauja nauja faila, pvz:  template-item.php
        // B)  perkelti dizaina is index failo ciklo (1.3) (visa h2 eilute):
        //     c
        //       i   faila  template-item.php
        // C)    index failo cikle (1.3) ideti:
        //       include  (' template-item.php');
        //  papildomai)  template-item.php   faile uzdeti klases 'col-md-4  m-1'
        //           virs ciklo uzdeti klase 'row' ir po ciklu uzdaryti


        ?>



        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
