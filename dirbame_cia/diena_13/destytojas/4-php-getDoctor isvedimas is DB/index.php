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
        <?php
        // is DB naudojant foreach ir getDoctor($nr) f-ja
        // UZDUOTIS 1.1: susikurti nauja projekta ir issivesti gydytoja
include_once('db_funtions.php');

$gydytojas = getDoctor($prisijungimas, 4);
print_r($gydytojas); // !!! test

// UZDUOTIS 1.2:
// be foreach atspausdinti visa gydytojo info
// <h2> <em>nr</em> vardas pavarde</h2>
echo $gydytojas['name'] . " " . $gydytojas['lname'] . "<br />";
echo " {$gydytojas['name']}   {$gydytojas['lname']}   <br />";
// ARBA
echo "<h2><em> {$gydytojas['id']} </em> {$gydytojas['name']}   {$gydytojas['lname']}   </h2>";

// UZDUOTIS 1.3:
// su kokiu nors ciklu atspausdinti VISUS gydytojus
// <h2 class='bg-info   m-1'> vardas pavarde</h2>
for ($i=1; $i < 6; $i++) {
    $gyd = getDoctor($prisijungimas, $i);  // $i nuo 1 iki 6 vis dides
    echo "<h2 class='bg-info   m-1'> {$gyd['name']}   {$gyd['lname']}   </h2>";
}
echo "=================1.3.2==================";
// UZDUOTIS 1.3.2
// A) sukurti nauja nauja faila, pvz:  template-item.php
// B)  perkelti dizaina is index failo ciklo (1.3) (visa h2 eilute):
//     <h2 class='bg-info   m-1'> vardas pavarde</h2>
//       i   faila  template-item.php
// C)    index failo cikle (1.3) ideti:
//       include  (' template-item.php');
//  papildomai)  template-item.php   faile uzdeti klases 'col-md-4  m-1'
//           virs ciklo uzdeti klase 'row' ir po ciklu uzdaryti
echo "<div class='row'> ";
    for ($i=1; $i < 6; $i++) {
        $gyd = getDoctor($prisijungimas, $i);  // $i nuo 1 iki 6 vis dides
        include  ('template-item.php');
    }
echo "</div> ";

         ?>


        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
