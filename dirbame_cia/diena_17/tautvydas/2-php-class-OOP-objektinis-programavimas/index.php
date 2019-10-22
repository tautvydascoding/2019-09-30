<?php

include('automobilis.php');

$Auto1 = new Automobilis();  // obj-to kurimas
$Auto1->spalva = "raudona"; // kintamojo keitimas
echo "spalva: $Auto1->spalva";
