<?php 
class gyvunas{
	protected $vardas;
	public function begti()
	{
		echo $this->vardas . " begu";
	}
}

class suo extends gyvunas{
	public function __construct($vardas){
		$this->vardas = $vardas;
	}
	
	public function loti()
	{
		echo $this->vardas . " loju";
	}
}

class kate extends gyvunas{
	public function __construct($vardas){
		$this->vardas = $vardas;
	}
	
	public function murkti()
	{
		echo $this->vardas . " murkiu";
	}
}


?>