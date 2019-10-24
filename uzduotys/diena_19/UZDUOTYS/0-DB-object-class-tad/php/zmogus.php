<?php
class zmogus{
	public $ugis;
	public $vardas;

	public function __construct($vardas, $ugis){
		$this->vardas = $vardas;
		$this->ugis = $ugis;
	}
	
	public function eiti(){
		echo $this->vardas . " einu!";
	}
}
?>