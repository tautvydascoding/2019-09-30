<?php

 // konstantos
  define('DB_VARDAS', 'hospital3'); // duomenu bazes vardas
  define('MYSQL_VARTOTOJO_VARDAS', 'root'); // mysql user'is
  define('MYSQL_SLAPTAZODIS', 'root');
  define('DB_HOST', 'localhost');

// Prisijungimas prie DB
$connection = mysqli_connect( DB_HOST, MYSQL_VARTOTOJO_VARDAS, MYSQL_SLAPTAZODIS, DB_VARDAS );   // jei PORT ne 80, irasykite i gala

//      AR true
if (   $connection  ) {
    ///echo "Prisijungete sekmingai <br>";
} else {
    die( "ERRROR: neapvyko prisijungti" .  mysqli_connect_error()  );
}

function getDBPrisiungimas() {
    global $connection; // duodam leidima prieiti pire global kintamojo
    // !!! global eilute ,negali keisti kintamojo:     $connection = 'false';
    return $connection;
}

/*
    Duomenu paemimas is duomenu bazes
    $nr - id, kuri gydytoja gauname
   */
function getDoctor( $nr = 0) { // default $nr = 0, jeigu nr nepaduotas
    $mano_sql_tekstas = "SELECT * FROM doctors WHERE id='$nr'; ";
    // ivykdome SQL
    // $rezultatai - (objektas) - gydytojo duomenys is DB
    $rezultatai   = mysqli_query( getDBPrisiungimas(),    $mano_sql_tekstas );
    if ( $rezultatai ) {
        // echo "Gygytoja radome<br>";
        // var_dump( $rezultatai );  // test  $rezultatai - objektas
        // mysqli_fetch_assoc - Objekta - pavercia i Masyva (asociatyvu)
        $rezultatai_masyve =  mysqli_fetch_assoc( $rezultatai );

        return $rezultatai_masyve;
    } else {
        echo "Gydytojas nr: $nr nerastas!!! <br>";
    }
}
$gydytojas1 = getDoctor( 3 ); // gaunam masyva
// $gydytojas1 - gydytojo masyvas

 //print_r( $gydytojas1 ); // test



//
