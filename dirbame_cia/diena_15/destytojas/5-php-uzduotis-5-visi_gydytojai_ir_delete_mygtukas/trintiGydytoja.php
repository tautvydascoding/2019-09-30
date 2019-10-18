<h1>Tikriausiai sekmingai istrintas   gydytojas</h1>

<?php
    include('db_functions.php');
    $x = $_GET['numeris'];
    deleteDoctor($x);



 ?>
<h2>Sekmingai istrinta!!!!</h2>


<!-- js redirect: -->
<script type="text/javascript">
    //window.location.replace("http://example.com/");
</script>

<?php
// PHP redirect
// header("Location: http://example.com/myOtherPage.php");
// die();
 ?>
