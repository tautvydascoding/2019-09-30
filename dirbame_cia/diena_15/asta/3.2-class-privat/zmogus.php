<?php
class zmogus {
	private $ugis = 1;
	private $vardas = "nezinomas";
 function getManoUgis(){
    echo $this->ugis;
		return $this->ugis;
  }
function getManoVardas(){
    echo $this->vardas;
		 return $this->vardas;
  }
function setManoUgis($x){
    echo $this->ugis=$x;
	}
function setManoVardas($x){
    echo $this->vardas=$x;
	}
}

?>
