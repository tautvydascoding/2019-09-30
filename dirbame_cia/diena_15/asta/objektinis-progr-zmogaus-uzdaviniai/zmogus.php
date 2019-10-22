<?php
class zmogus {
	public $ugis = 1;
	public $vardas = "nezinomas";
	public function einu(){
    echo "Einu einu...";
  }
}


//construct funkcijos panaudojimas, kad nereiketu suvedineti kiekvieno atskirai parrametro, o butu galima visus paduoti kartu
class zmogelis {
  public $ugis = 1;
  public $vardas = "nezinomas";
  function __construct($u=-1, $v="bevardis"){
    $this->vardas=$v;
     $this->ugis=$u;
}
}

?>
