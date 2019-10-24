<?php
// php uzdaryti nereikia jei faile nebus html'o
//
//

// UZDUOTIS
// google CRUD
//
// 1. sukurti faila:  db_functions.php
// 2. parasysi PHP faile mysqli prisijungima prie DB
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)
//
// ======================= gydytoju CRUD ======================================================
//debuginimo kintamojo sukurimas

$debug_mode = 1; //[0,1,2,3];
//
//prisijungimas
//sukuriamos konstantos - nekintantys kintamieji

define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', 'root');
define('DB_VARDAS', 'muzikosprekes');
define('DB_HOST', 'localhost');

// define (PORT, '8889'); jei portas portas



//if($prisijungimas){
//    echo "Prisijungete prie DB sekmingai! <br/>";
//} else {
//    echo "ERROR nepavyko prisijungti prie DB: <br>". mysqli_connect_error();
//}

//if($debug_mode > 1){
//    echo "Prisijungete prie DB sekmingai!!! <br/>";
//}
// funkcija is duomenu bazes paima nurodyta gydytoja pagal ID
// $p  - prisijungimas prie db
// $id  - gydytojo ID
// return - isveda rasto gydytojo masyva (jo duomenis)

$prisijungimas = mysqli_connect(DB_HOST,MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);
mysqli_set_charset($prisijungimas,'utf8');
// funkcija prisijungia prie duomenu bazes ir grazina prisijungima
//        getPrisijungimas()

//funkcija PATIKRINTA - VEIKIA
function getPrisijungimas (){
    global $prisijungimas, $debug_mode; // paima globalu kintamaji
    if($prisijungimas){
        if($debug_mode > 0){
            echo "Prisijungete prie DB sekmingai!!! <br/>";
        }
        return $prisijungimas;
    } else {
        echo "ERROR nepavyko prisijungti prie DB: <br>". mysqli_connect_error();
    }
}



//funkcija PATIKRINTA - VEIKIA
function createKategorija ($pavadinimas,$img,$pozicija) {
    $manoSQL_String = "INSERT INTO prekes_kategorija VALUES (NULL, '$pavadinimas', '$img', '$pozicija') ";
    $create = mysqli_query(getPrisijungimas(), $manoSQL_String);
   if ($create){
       echo "Ikelti kategorija pavyko";
   } else{
       echo "NEPAVYKO ikelti kategorijos". mysqli_error(getPrisijungimas());
   }

}

//createKategorija('Antanas','Brilius','6');



//funkcija PATIKRINTA - VEIKIA
function deleteKategorija ($kategorijos_id) {
    $delete = mysqli_query(getPrisijungimas(), "DELETE FROM prekes_kategorija
                                                      WHERE kategorijos_id = '$kategorijos_id'
                                                      LIMIT 1;
                                                      ");
    if ($delete){
        echo "Istrinti kategorija pavyko";
    } else{
        echo "NEPAVYKO istrinti kategorijos". mysqli_error(getPrisijungimas());
    }

}
//
//deleteKategorija(10);
//
//funkcija PATIKRINTA - VEIKIA

function updateKategorija($kategorijos_id , $pavadinimas , $foto , $pozicija) {
    $update = mysqli_query(getPrisijungimas(), "UPDATE prekes_kategorija
                                                      SET pavadinimas = '$pavadinimas', foto = '$foto', pozicija= '$pozicija'
                                                      WHERE kategorijos_id = '$kategorijos_id';
                                                      ");
    if ($update){
        echo "Pakeisti kategorija pavyko";
    } else{
        echo "NEPAVYKO pakeisti kategorijos". mysqli_error(getPrisijungimas());
    }

}

//updateKategorija('11','Gitanas',"sdfsdf", '6');


//funkcija PATIKRINTA - VEIKIA
function getKategorijos($kiekis = 9999) {
    $getAllKategorijos = mysqli_query(getPrisijungimas(), "SELECT * FROM prekes_kategorija LIMIT $kiekis;");

    if ($getAllKategorijos){
        //echo "Paimti preke pavyko";
        return $getAllKategorijos;
    } else{
        echo "NEPAVYKO paimti prekes";
        return NULL;
    }

}
//print_r(getKategorijos());


// sukuriam kintamaji kurio reiksme bus MYSQL objektas (netvarkingas masyvas).
//$visiGydytojaiMYSQL_Objektas = getDoctors();

// su fetch paimam pirma MYSQL objekto eilute ir paverciam i tvarkinga pirmos eilutes masyva
//$gydytojas_Masyvas = mysqli_fetch_assoc($visiGydytojaiMYSQL_Objektas);


// su while ciklu atspausdinsim visus gydytu masyvus
//while ($gydytojas_Masyvas){
//    print_r($gydytojas_Masyvas);
//    echo "<br>";
//    $gydytojas_Masyvas = mysqli_fetch_assoc($visiGydytojaiMYSQL_Objektas);
//}


// kitas variantas - visa fetch'a ikisam i salyga
//while ($gydytojas_Masyvas = mysqli_fetch_assoc($visiGydytojaiMYSQL_Objektas)){
//    print_r($gydytojas_Masyvas);
//    echo "<br>";
//    }



//        foreach ($masyvas as $x){
//            echo $masyvas ["lname"];
//print_r($masyvas, "name");
//            }
//
