<?php 


interface Logo{
	public function displayLogo();
}


class RealLogo implements Logo{
	private $logo;

	public function __construct($logo){
		$this->logo = $logo;
		echo "Logo loading:............<br> ";
	}
	
	public function displayLogo(){
		printf("Logo: %s <br>",$this->logo);
	}
}


class ProxyLogo implements Logo{
	private $logo;
	private $display;

	public function __construct($logo){
		$this->logo = $logo;
	}

	public function displayLogo(){
		if(is_null($this->display))
			$this->display = new RealLogo($this->logo);
		return $this->display->displayLogo();
	}

}

$logo1 = new ProxyLogo('shopLogo.png');
$logo2 = new ProxyLogo('webLogo.png');
$logo1->displayLogo();
$logo2->displayLogo();