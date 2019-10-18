<h1>Tikriausiai sekmingai sukurtas naujas gydytojas</h1>

<?php
    include('db_functions.php');
    $vard = $_GET['vardas'];
    $parv = $_GET['pavarde'];
    createDoctor($vard, $parv);

    // 1.3. Narsykleje nueiti:
    // localhost/ ... /naujasGydytojas.php?vardas=TOMAS&pavarde=TOMAUSKIS

 ?>
<h2>Sekmingai sukurta!!!!</h2>


<!-- js redirect: -->
<script type="text/javascript">
    //window.location.replace("http://example.com/");
</script>

<?php
// PHP redirect
// header("Location: http://example.com/myOtherPage.php");
// die();
 ?>
