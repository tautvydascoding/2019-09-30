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

$debug_mode = 0; //[0,1,2,3];
//
//prisijungimas
//sukuriamos konstantos - nekintantys kintamieji

define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', 'root');
define('DB_VARDAS', 'hospital9');
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

// funkcija prisijungia prie duomenu bazes ir grazina prisijungima
//        getPrisijungimas()

function getPrisijungimas (){
    global $prisijungimas; // paima globalu kintamaji
    if($prisijungimas){
//        if($$debug_mode > 1){
//            echo "Prisijungete prie DB sekmingai!!! <br/>";
//        } else {
//            echo "ERROR nepavyko prisijungti prie DB: <br>". mysqli_connect_error();
//        }
        return $prisijungimas;
    }
}

//function getDoctor($id)
//{
//    $rez = mysqli_query(getPrisijungimas(), "SELECT * FROM doctors WHERE id = '$id'");
//    //tikrinam ar paememe duomenis ir jei paememe, tai duomenu pirma eilute paverciam i masyva su fetch
//    // mysqli_num_rows($rez)>0  - tikrina ar gauta bent viena rezultatu eilute
//    if ($rez && mysqli_num_rows($rez) > 0) {
//        $masyvas = mysqli_fetch_assoc($rez);
//        return $masyvas;
//    } else {
//        echo "ERROR: nepavyko paimti gydytojo: $id. " . mysqli_error(getPrisijungimas());
//        return NULL;
//    }
//}
//  print_r($masyvas["lname"]);

//$gydytojasArray = getDoctor(2);
//
//print_r($gydytojasArray);


function createDoctor ($name, $lname) {
    $create = mysqli_query(getPrisijungimas(), "INSERT INTO doctors (id,name,lname)
                                                      VALUES (NULL, '$name', '$lname');
                                                      ");
   if ($create){
       echo "Ikelti gydytoja pavyko";
   } else{
       echo "NEPAVYKO ikelti gydytojo";
   }

}

//createDoctor('Antanas','Brilius');




function deleteDoctor ($id) {
    $delete = mysqli_query(getPrisijungimas(), "DELETE FROM doctors
                                                      WHERE id = '$id'
                                                      LIMIT 1;
                                                      ");
    if ($delete){
        echo "Istrinti gydytoja pavyko";
    } else{
        echo "NEPAVYKO istrinti gydytojo";
    }

}
//
//deleteDoctor(14);
//
function updateDoctor($id,$name,$lname) {
    $update = mysqli_query(getPrisijungimas(), "UPDATE doctors
                                                      SET name = '$name', lname= '$lname'
                                                      WHERE id = '$id';
                                                      ");
    if ($update){
        echo "Pakeisti gydytoja pavyko";
    } else{
        echo "NEPAVYKO pakeisti gydytojo";
    }

}

updateDoctor('1','Gitanas','Jonauskis');

function getDoctors($kiekis = 9999) {
    $getAllDoctors = mysqli_query(getPrisijungimas(), "SELECT * FROM doctors LIMIT $kiekis;");

    if ($getAllDoctors){
        //echo "Paimti gydytoja pavyko";
        return $getAllDoctors;
    } else{
        echo "NEPAVYKO paimti gydytojo";
        return NULL;
    }

}
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
