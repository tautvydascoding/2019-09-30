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
$publish_mode = false; //[0,1,2,3];
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

$prisijungimas = mysqli_connect(DB_HOST,MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS,);
mysqli_set_charset($prisijungimas,'utf8');
// funkcija prisijungia prie duomenu bazes ir grazina prisijungima
//        getPrisijungimas()

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

//INSERT INTO tab_teacher (name_teacher)
//    VALUES ('tom stills')
//INSERT INTO tab_student (name_student, id_teacher_fk)
//    VALUES ('rich man', LAST_INSERT_ID())



//funkcija PATIKRINTA - VEIKIA  - IKELIA IR PREKE IR NUOTRAUKAS
function createPreke ($kategorija, $pavadinimas,$aprasymas,$kaina,$nuolaida,$pozicija,$kiekis,$img_small,$img_big) {
    $manoSQL_String = "INSERT INTO prekes VALUES (NULL, '$kategorija', '$pavadinimas', '$aprasymas', '$kaina', '$nuolaida', '$pozicija', NULL, '$kiekis') ";
    $manoSQL_StringFOTO = "INSERT INTO img VALUES (NULL, LAST_INSERT_ID(), '$img_small', '$img_big') ";

    $create = mysqli_query(getPrisijungimas(), $manoSQL_String);
    $createFOTO = mysqli_query(getPrisijungimas(), $manoSQL_StringFOTO);

   if ($create){
       echo "Ikelti preke pavyko";
   } else{
       echo "NEPAVYKO ikelti prekes". mysqli_error(getPrisijungimas());
   }
    if ($createFOTO){
        echo "Ikelti foto pavyko";
    } else{
        echo "NEPAVYKO ikelti foto". mysqli_error(getPrisijungimas());
    }

}

//createPreke('3','Brilius', 'aeewwef', '43', '0', '3','50','bandymofoto1','bandymofoto2');



//funkcija PATIKRINTA - VEIKIA  - ISTRINA IR PREKE IR NUOTRAUKAS
function deletePreke ($id) {
    $manoSQL_StringDeleteFOTO = "DELETE FROM img WHERE prekes_id = '$id' ";
    $manoSQL_StringDelete = "DELETE FROM prekes WHERE id = '$id' ";



    $deleteFOTO = mysqli_query(getPrisijungimas(), $manoSQL_StringDeleteFOTO);

    $delete = mysqli_query(getPrisijungimas(), $manoSQL_StringDelete);


    if ($delete){
        echo "Istrinti preke pavyko";
    } else{
        echo "NEPAVYKO istrinti prekes". mysqli_error(getPrisijungimas());
    }
    if ($deleteFOTO){
        echo "Istrinti prekes nuotraukas pavyko";
    } else{
        echo "NEPAVYKO istrinti prekes nuotrauku". mysqli_error(getPrisijungimas());
    }

}
//
//deletePreke(34);
//

//funkcija PATIKRINTA - VEIKIA  - PAKEICIA IR PREKE IR NUOTRAUKAS

function updatePreke($id , $kategorija , $pavadinimas , $aprasymas , $kaina , $nuolaida , $pozicija , $kiekis , $img_small , $img_big) {

    $manoSQL_StringUpdate = "UPDATE prekes SET kategorija = '$kategorija', pavadinimas= '$pavadinimas', aprasymas= '$aprasymas', kaina= '$kaina', nuolaida= '$nuolaida', pozicija= '$pozicija',kiekis= '$kiekis'
                            WHERE id = '$id'";
    $manoSQL_StringUpdateFOTO = "UPDATE img SET img_small = '$img_small', img_big= '$img_big' WHERE prekes_id = '$id' ";

    $updateFOTO = mysqli_query(getPrisijungimas(), $manoSQL_StringUpdateFOTO);

    $update = mysqli_query(getPrisijungimas(), $manoSQL_StringUpdate);

    if ($updateFOTO){
        echo "Pakeisti prekes nuotrauka pavyko";
    } else{
        echo "NEPAVYKO pakeisti prekes nuotraukos". mysqli_error(getPrisijungimas());
    }
    if ($update){
        echo "Pakeisti preke pavyko";
    } else{
        echo "NEPAVYKO pakeisti prekes". mysqli_error(getPrisijungimas());
    }

}

//updatePreke('35', '3','Jonas', 'aeewwef', '43', '0', '3','50','foto10' , 'foto20');


//funkcija PATIKRINTA - VEIKIA
function getPrekes($kiekis = 9999) {
    $getAllPrekes = mysqli_query(getPrisijungimas(), "SELECT * FROM prekes LIMIT $kiekis;");

    if ($getAllPrekes){
        //echo "Paimti preke pavyko";
        return $getAllPrekes;
    } else{
        echo "NEPAVYKO paimti prekes". mysqli_error(getPrisijungimas());
        return NULL;
    }

}

//print_r(getPrekes());




// funkcija     paima prekes ir FOTO pagal kategorija
// funkcija PATIKRINTA - VEIKIA
function getPrekesPagalKategorija($kategorija) {

    $uzklausa1 = "SELECT * FROM prekes,img WHERE prekes.kategorija = '$kategorija' AND img.prekes_id = prekes.id";
    $getPrekesIRFotoSuKategorija = mysqli_query(getPrisijungimas(), $uzklausa1);

    if ($getPrekesIRFotoSuKategorija){
        //echo "Paimti prekes ir nuotraukas pagal kategorija pavyko";
        return $getPrekesIRFotoSuKategorija;
    } else{
        echo "NEPAVYKO paimti prekiu ir nuotrauku pagal kategorija". mysqli_error(getPrisijungimas());
        return NULL;
    }

}
//print_r(getPrekesPagalKategorija('bass_gitara'));


// funkcija     paima viena preke ir FOTO pagal id (ir pavercia i masyva)
// funkcija PATIKRINTA - VEIKIA
function getPrekePagalId($id) {

    $uzklausa2 = "SELECT * FROM prekes,img WHERE prekes.id = '$id' AND img.prekes_id = prekes.id";
    $getPreke = mysqli_query(getPrisijungimas(), $uzklausa2);

    if ($getPreke){
        //echo "Paimti prekes ir nuotraukas pagal kategorija pavyko";
        $prekesMasyvas = mysqli_fetch_assoc($getPreke);
        return $prekesMasyvas;
    } else{
        echo "NEPAVYKO paimti prekes ir nuotraukos pagal id". mysqli_error(getPrisijungimas());
        return NULL;
    }

}
//print_r(getPrekePagalId('5'));













// funkcija     paima visas prekes ir FOTO
// funkcija PATIKRINTA - VEIKIA
function getVisosPrekes() {

    $uzklausa2 = "SELECT * FROM prekes,img WHERE prekes.id = img.prekes_id";
    $getPrekesIRFotoVisos = mysqli_query(getPrisijungimas(), $uzklausa2);

    if ($getPrekesIRFotoVisos){
        //echo "Paimti VISAS prekes ir nuotraukas pavyko";
        return $getPrekesIRFotoVisos;
    } else{
        echo "NEPAVYKO paimti VISU prekiu ir nuotrauku". mysqli_error(getPrisijungimas());
        return NULL;
    }

}
//print_r(getVisosPrekes());










//funkcija PATIKRINTA - VEIKIA
// funkcija     paima viena preke pagal id

//function getPrekeMasyvas($id)
//{
//    $rez = mysqli_query(getPrisijungimas(), "SELECT * FROM prekes WHERE id = '$id'");
//    //tikrinam ar paememe duomenis ir jei paememe, tai duomenu  eilute paverciam i masyva su fetch
//    // mysqli_num_rows($rez)>0  - tikrina ar gauta bent viena rezultatu eilute
//    if ($rez && mysqli_num_rows($rez) > 0) {
//        $prekesMasyvas = mysqli_fetch_assoc($rez);
//        return $prekesMasyvas;
//    } else {
//        echo "ERROR: nepavyko paimti prekes, kurios id: $id. " . mysqli_error(getPrisijungimas());
//        return NULL;
//    }
//}
//$reiksme= getPrekeMasyvas(15);
//  print_r($reiksme);




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
