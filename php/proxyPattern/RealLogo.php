<?php namespace php\proxyPattern;

class RealLogo implements Logo {
	
	private $logo;

	public function __construct($logo) {
		$this->logo = $logo;
		echo "Logo loading:............<br> ";
	}

	public function displayLogo() {
		printf("Logo: %s <br>",$this->logo);
	}
}
