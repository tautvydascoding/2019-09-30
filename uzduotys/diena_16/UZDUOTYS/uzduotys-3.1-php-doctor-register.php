<?php

// createDoctor() paleidimas per narsykle per su mygtuku

// 1.1 sukurti PHP faila  naujasGydytojas.php
// 1.2. faile paleisti:
include('db_functions.php');
$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);
// 1.3. Narsykleje nueiti (pamatysite klaida):
    localhost/ ... /naujasGydytojas.php

// 1.4. Narsykleje nueiti:
    localhost/ ... /naujasGydytojas.php?vardas=TOMAS&pavarde=TOMAUSKIS

// 1.5 faile index.php
// susikurti mygtuka "Naujas gydytojas" su "a" linku.
// "a" linkas turi rodyti i :   naujasGydytojas.php?vard=TOMAS&parv=TOMAUSKIS
// pvz:
<a href='naujasGydytojas.php?vardas=TOMAS&pavarde=TOMAUSKIS'> Kurti Nauja</a>



// ta pati padaryti su DELETE
