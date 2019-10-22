<?php
function test()
{
  static $a = 0;
  echo $a;
  $a++;
}

test();  //$a == 0
test();
test();

//funkcija, kuri iskviecia pati save 10 kartu "ciklas"
function rekursija(){
    static $i = 0;
    $i++;
    if ($i<10) {

        rekursija();
        echo $i."<br />";
    }
}
rekursija();
 ?>
