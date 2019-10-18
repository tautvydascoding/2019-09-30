 <?php
    
// 1. sukurti faila:  db_functions.php
// 2. parasysi PHP faile mysqli prisijungima prie DB
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)

//prisijungimas
//konstantos - nekintantys kintamieji - negali keisti
//------------nustatymai-------------

$debug_mode = 0;
define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', 'root');
define('DB_VARDAS', 'hospital8');
define('DB_HOST', 'localhost');
// define(PORT, '8889'): - jei pakeiciau MAMP MYSQL portas, tik tada naudoti Porta.

$prisijungimas = mysqli_connect(DB_HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);


/* 
prisijungia prie DB ir grazina connection
return DB prisijungima
*/

function getPrisijungimas() {
    global $prisijungimas, $debug_mode; 
    if ($prisijungimas) {
        if ($debug_mode > 1) {
             echo "Prisijunget sekmingai <br>";  
           } 
           return $prisijungimas;
        } else {
            echo "ERROR Neprisijungia prie duomenu bazes:".mysqli_connect_error();
}    
}

getPrisijungimas();

// getDoctor($nr)
/* is DB paima gydytoja pagal jo ID
    $prisijungimas - DB prisijungimas
    $nr - gydytoju ID duomenu bazeje
    return - array rasto gydytojo eilute
*/

function getDoctor($nr) {
    $rezultataiMysqlObjektas = mysqli_query(getPrisijungimas(),"SELECT * FROM doctors WHERE id = '$nr';");
        if ($rezultataiMysqlObjektas) { //mysqli_num_rows($rezultataiMysqlObjektas) > 0, ar is viso yra eiluciu
            $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObjektas);
        return $rezultataiArray; 
        } else {
            echo "ERROR: nepavyko paimt gydytojo: $nr.". mysqli_error(getPrisijungimas());
            return NULL;
        }
   
}

// getDoctor(2); 

// test // paimam id = 4 gydytoja
// $gydytojasArray = getDoctor(2); 
// print_r($gydytojasArray);

// echo "<br> Vardas : {$gydytojasArray['name']} <br>";

// sukuriamas gydytojas, padavus reiksmes atitinkancias stulpelius DB. prisiminti vietoj id paduoti reiksme NULL

// function createDoctor($name, $lname) {
//     mysqli_query(getPrisijungimas(),"INSERT INTO doctors VALUES (NULL,'$name','$lname')");
// }

function createDoctor($name, $lname) {
    $mySQL_string = "INSERT INTO doctors VALUES (NULL,'$name','$lname')";
    $arSuveike = mysqli_query(getPrisijungimas(), $mySQL_string);
    if (!$arSuveike) {
        echo "ERROR:mano SQl sintakses klaidos: ".mysqli_error(getPrisijungimas());
        return NULL;
    }
}

// createDoctor('Henris', 'Karolis');
//---------------------------------------

// istrinimo funkcija, kurioje padavus gydytojo id, pagal ji istrinama is DB gydytojo eilute;

// function deleteDoctor($nr) {
//     mysqli_query(getPrisijungimas(),"DELETE FROM doctors WHERE id = '$nr' LIMIT 1");
// }

function deleteDoctor($nr) {
    $mySQL_string = "DELETE FROM doctors 
                            WHERE id = '$nr' 
                            LIMIT 1
                    ";
    $arSuveike = mysqli_query(getPrisijungimas(), $mySQL_string);
    if (!$arSuveike) {
        echo "ERROR:mano SQl sintakses klaidos: ".mysqli_error(getPrisijungimas());
        return NULL;
    }
}

// deleteDoctor(7); //test, ar istrina gydytoja, kur id=5;

//--------------------------------------

// update funkcija, kuriai nurodai pagal id kuria eilute updatinsi ir nurodome naujas reiksmes stulpelems.

// function updateDoctor($nr, $name, $lname) {
//     mysqli_query(getPrisijungimas(),"UPDATE doctors SET name = '$name', lname = '$lname' WHERE id = '$nr' LIMIT 1" );
// }

// visus kintamuosius mysql irasyti tarp kabuciu, jei vardiname daugiau nei viena column dedam kablelius, jei daugiau nebevardinsim nededam kablelio

function updateDoctor($nr, $name, $lname) {
    $mySQL_string = "UPDATE doctors 
                        SET name = '$name', lname = '$lname' 
                        WHERE id = '$nr' 
                        LIMIT 1
                    ";
    $arSuveike = mysqli_query(getPrisijungimas(), $mySQL_string);
    if (!$arSuveike) {
        echo "ERROR:mano SQl sintakses klaidos: ".mysqli_error(getPrisijungimas());
        return NULL;
    }
}

// updateDoctor(4, 'Laila', 'Litaite'); //test

//-----------------------------------------

// function getDoctors($kiekis = 999) {
//     $daktaraiMysqlObject = mysqli_query(getPrisijungimas(),"SELECT * FROM doctors LIMIT '$kiekis'");
//     return $daktaraiMysqlObject;
// }

function getDoctors($kiekis = 9999) {
    $mySQL_string = "SELECT * FROM doctors LIMIT $kiekis";
    $arSuveike = mysqli_query(getPrisijungimas(), $mySQL_string);
   
    if (!$arSuveike) {
        echo "ERROR:mano SQl sintakses klaidos: ".mysqli_error(getPrisijungimas());
        return NULL;
    } return  $arSuveike;
} 


$gydytojuSarasas = getDoctors();

$gydytojas_Array = mysqli_fetch_assoc($gydytojuSarasas);

// while ($gydytojas_Array) {
//    print_r($gydytojas_Array);
//    echo "<br>";
//    $gydytojas_Array = mysqli_fetch_assoc($gydytojuSarasas);
// }


