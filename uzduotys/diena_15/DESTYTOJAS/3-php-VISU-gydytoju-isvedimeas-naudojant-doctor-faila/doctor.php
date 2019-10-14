<?php

$manoGydytojas = getDoctor($i); // grizo array
echo "<li class='bg-warning m-1'>";
echo         $manoGydytojas['name'] . " " . $manoGydytojas['lname'];
echo  "</li> ";
