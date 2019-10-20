<?php

include('db_functions.php');

$nr = $_GET['id'];
deleteDoctor($nr);

header("Location: index.php?zinute=Sekmingai istrintas gydytojas");