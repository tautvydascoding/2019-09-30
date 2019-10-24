 <?php // konstantos
    define("DB_PAVADINIMAS", "hospital9" );
    define("DB_VARTOTOJAS", "root" );  // root
    define("DB_SLAPTAZODIS", "root" );  // root
    define("DB_HOST", "localhost");

    $prisijungimas = mysqli_connect(  DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);

    if ($prisijungimas) {
        // echo "Prisijungei prie DB  <br />";
    } else {
        if ($arRodytiZinutes) {
            echo "ERROR: Prisijungti nepavyko!!! " . mysqli_connect_error();
        }
    }
	function getPrisijungimas() {
        global $prisijungimas; 
        return $prisijungimas;
    }
	
?>