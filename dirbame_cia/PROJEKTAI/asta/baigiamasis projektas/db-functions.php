<?php
define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', 'root');
define('DB_VARDAS', 'koncertai');
define('DB_HOST', 'localhost');

$debug_mode = 1;
if($debug_mode > 1) {

}
$prisijungimas = mysqli_connect(DB_HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);
mysqli_set_charset($prisijungimas, 'utf8');

function getPrisijungimas(){
  global $prisijungimas;  //paimam globalia reiksme
  if ($prisijungimas) {
  //echo "Prisijungete prie DB <br/>";
  return $prisijungimas;
  } else {
  //echo "ERROR nepavyko prisijungti <br />".mysqli_connection_error();
}
}
getPrisijungimas();


function issaugotiElPasta($elpastas){
  $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"INSERT INTO naujienlaiskis VALUES (NULL, '$elpastas')");
  if (!$rezultataiMySQLObjektas){
    echo "ERROR:mano SQL sintakses klaidos:".mysqli_error(getPrisijungimas());
  }

}

function issaugotiZinute($vardas, $elpastas, $zinute){
  $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"INSERT INTO uzklausos VALUES (NULL, '$vardas', '$elpastas', '$zinute')");
  if (!$rezultataiMySQLObjektas){
    echo "ERROR:mano SQL sintakses klaidos:".mysqli_error(getPrisijungimas());
  }

}
function visirenginiai( $kiekis = 100){

  $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"SELECT * FROM renginiai INNER JOIN koncerto_apras
  ON renginiai.aprasymo_id = koncerto_apras.id
  WHERE renginiai.metai >= CURDATE()
  ORDER BY renginiai.metai ");
//pasitikrinam ar grizo kazkas is DB,  kad zinot ar nepadarem klaidu
  if ($rezultataiMySQLObjektas){  //mysqli_num_rows($rezultataiMySQLObjektas) galima tikrinti ar gavome duomenu, sia komanda reiketu ikelti i if vidu su dar vienu if

      return $rezultataiMySQLObjektas;
} else {
  echo "Duomenu negavau  $nr".mysqli_error(getPrisijungimas());
  return NULL;
}
}

function visipraejerenginiai( $kiekis = 100){

  $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"SELECT * FROM renginiai INNER JOIN koncerto_apras
  ON renginiai.aprasymo_id = koncerto_apras.id
  WHERE renginiai.metai < CURDATE()
  ORDER BY renginiai.metai DESC");
//pasitikrinam ar grizo kazkas is DB,  kad zinot ar nepadarem klaidu
  if ($rezultataiMySQLObjektas){  //mysqli_num_rows($rezultataiMySQLObjektas) galima tikrinti ar gavome duomenu, sia komanda reiketu ikelti i if vidu su dar vienu if

      return $rezultataiMySQLObjektas;
} else {
  echo "Duomenu negavau  $nr".mysqli_error(getPrisijungimas());
  return NULL;
}
}


//funkcija, kad vieno renginio puslapyje atspausdintu info apie rengini
function getRenginys($nr){
  $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"SELECT * FROM renginiai
  INNER JOIN koncerto_apras ON renginiai.aprasymo_id = koncerto_apras.id
  INNER JOIN nuotraukos ON renginiai.aprasymo_id = nuotraukos.koncerto_id
  WHERE aprasymo_id = '$nr' LIMIT 1
   ");
//pasitikrinam ar grizo kazkas is DB,  kad zinot ar nepadarem klaidu
  if ($rezultataiMySQLObjektas){  //mysqli_num_rows($rezultataiMySQLObjektas) galima tikrinti ar gavome duomenu, sia komanda reiketu ikelti i if vidu su dar vienu if

      return $rezultataiMySQLObjektas;
} else {
  echo "Duomenu negavau  $nr".mysqli_error(getPrisijungimas());
  return NULL;
}
}

//funkcija, kad atspausdintu informacija kur vyks visi renginiai
function getRenginioVietos($nr){
  $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"SELECT * FROM renginiai
  INNER JOIN koncerto_apras ON renginiai.aprasymo_id = koncerto_apras.id
  INNER JOIN nuotraukos ON renginiai.aprasymo_id = nuotraukos.koncerto_id
  WHERE aprasymo_id = '$nr'  ");
//pasitikrinam ar grizo kazkas is DB,  kad zinot ar nepadarem klaidu
  if ($rezultataiMySQLObjektas){  //mysqli_num_rows($rezultataiMySQLObjektas) galima tikrinti ar gavome duomenu, sia komanda reiketu ikelti i if vidu su dar vienu if

      return $rezultataiMySQLObjektas;
} else {
  echo "Duomenu negavau  $nr".mysqli_error(getPrisijungimas());
  return NULL;
}
}


function getRenginioNuotraukos(){
  $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"SELECT * FROM nuotraukos
  INNER JOIN koncerto_apras ON nuotraukos.koncerto_id = koncerto_apras.id");
//pasitikrinam ar grizo kazkas is DB,  kad zinot ar nepadarem klaidu
  if ($rezultataiMySQLObjektas){  //mysqli_num_rows($rezultataiMySQLObjektas) galima tikrinti ar gavome duomenu, sia komanda reiketu ikelti i if vidu su dar vienu if

      return $rezultataiMySQLObjektas;
} else {
  echo "Duomenu negavau  $nr".mysqli_error(getPrisijungimas());
  return NULL;
}
}
function issaugotikoncerta($pavadinimas, $aprasymas){
  $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"INSERT INTO koncerto_apras VALUES (NULL, '$pavadinimas', '$aprasymas')");
  if (!$rezultataiMySQLObjektas){
    echo "ERROR:mano SQL sintakses klaidos:".mysqli_error(getPrisijungimas());
  }

}

function visikoncertai( $kiekis = 100){

  $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"SELECT * FROM koncerto_apras ");
//pasitikrinam ar grizo kazkas is DB,  kad zinot ar nepadarem klaidu
  if ($rezultataiMySQLObjektas){  //mysqli_num_rows($rezultataiMySQLObjektas) galima tikrinti ar gavome duomenu, sia komanda reiketu ikelti i if vidu su dar vienu if

      return $rezultataiMySQLObjektas;
} else {
  echo "Duomenu negavau  $nr".mysqli_error(getPrisijungimas());
  return NULL;
}
}

function issaugotinaujarengini($metai, $valanda, $vieta, $bilietai, $aprasymo_id){
  $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"INSERT INTO renginiai VALUES (NULL, '$metai', '$valanda', '$vieta', '$bilietai', '$aprasymo_id')");
  if (!$rezultataiMySQLObjektas){
    echo "ERROR:mano SQL sintakses klaidos:".mysqli_error(getPrisijungimas());
  }

}
  function issaugotinaujasnuotraukas($uotrauka1, $uotrauka2, $uotrauka3, $uotrauka4, $uotrauka5, $koncerto_id){

    $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"INSERT INTO nuotraukos VALUES (NULL,'img/$uotrauka1', 'img/$uotrauka2', 'img/$uotrauka3', 'img/$uotrauka4', 'img/$uotrauka5', '$koncerto_id')");
    if (!$rezultataiMySQLObjektas){
      echo "ERROR:mano SQL sintakses klaidos:".mysqli_error(getPrisijungimas());
    }

  }

  ?>
