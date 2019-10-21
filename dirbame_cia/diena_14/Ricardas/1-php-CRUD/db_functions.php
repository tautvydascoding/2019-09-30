<?php
// 1. sukurti faila:  db_functions.php
// 2. parasysi PHP faile mysqli prisijungima prie DB
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)

// Prisijungimas
define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', '');
define('DB_VARDAS', 'hospital9');
define('DB_HOST', 'localhost');
//define(PORT, '8889'); // tik jei pakeistas portas

$debug_mode = 0; //1, 2, 3
//DB_HOST visad pirmas!============\/
$prisijungimas = mysqli_connect(DB_HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);

function getConnection(){ //prisijungia prie db ir grazina connection
    global $prisijungimas, $debug_mode;
        if($prisijungimas) {
            if($debug_mode > 0) { 
                echo "Prisijungete prie DB sekmingai <br>";
            } 
            return $prisijungimas;
        } else {
        echo "error, nepavyko prisijungtis".mysqli_connect_error();
    }
}

getConnection();

// if($prisijungimas) {
//     if($debug_mode > 0) { 
//         echo "Prisijungete prie DB sekmingai <br>";
//     } 
// } else {
//     echo "error, nepavyko prisijungtis".mysqli_connect_error();
// }


// function getDoctor($prisijungimas, $nr) {
//     $rez = mysqli_query($prisijungimas, "SELECT * FROM doctors WHERE id=$nr"); //mysql obj  
//     $masyvas = mysqli_fetch_assoc($rez); //1 array
//     print_r($masyvas);
// }

// getDoctor($prisijungimas, 1);

// function getDoctor($nr) {
//     $rez = mysqli_query(getConnection(), "SELECT * FROM doctors WHERE id=$nr");
//     if($rez){ //mysql_num_rows($rezultataiMysqlObjektas) > 0;
//          $masyvas = mysqli_fetch_assoc($rez);
//         return $masyvas;
//     } else {
//         echo "error: ner tokio gydytojo: $nr. " .mysql_error(getConnection()); //paskutini error parodo
//         return NULL;
//     }
   
// }

// getDoctor(1);



function createDoctor($vardas, $pav) {
    $ins = "INSERT INTO doctors VALUES (NULL, '$vardas', '$pav')";
    $cr = mysqli_query(getConnection(), $ins);
    if(!$cr) {
        echo "error: nepavyko itraukt gydytojo" .mysql_error(getConnection()); 
    }
}

// createDoctor('Kazys', 'Kazaitis');

function deleteDoctor($nr) {
    $dl = mysqli_query(getConnection(), "DELETE FROM doctors WHERE id='$nr' LIMIT 1");
    if(!$dl) {
        echo "error: nepavyko istrint gydytojo" .mysql_error(getConnection());
    }
}

// deleteDoctor(7);

function updateDoctor($nr, $var, $pav) {
    $up = mysqli_query(getConnection(), "UPDATE doctors SET name='$var', lname='$pav' WHERE id='$nr' LIMIT 1");
    if(!$up) {
        echo "error: nepavyko updatint gydytojo" .mysql_error(getConnection()); 
    }
}

// updateDoctor(6, 'Jonaitis', 'Jonys');

function returnDoctors($count = 999) {
    $visi = mysqli_query(getConnection(), "SELECT * FROM doctors LIMIT $count");
    return $visi;
    if(!$visi) {
        echo "error: nepavyko istraukt gydytoju" .mysql_error(getConnection()); 
    }
}

// $xas = returnDoctors();
// $mas = mysqli_fetch_assoc($xas);
// while($mas){
//     print_r($mas);
//     echo '<br>';
//     $mas = mysqli_fetch_assoc($xas);
// }


// $xas = returnDoctors();

// while($mas = mysqli_fetch_assoc($xas)){
//     print_r($mas);
//     echo '<br>';
// }

