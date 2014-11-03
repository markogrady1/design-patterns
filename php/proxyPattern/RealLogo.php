<?php namespace php\proxyPattern;

class RealLogo implements Logo {
	/**
	 * Logo instance 
	 * 
	 * @var $logo
	 */
	private $logo;

	public function __construct($logo) {
		$this->logo = $logo;
		echo "Logo loading:............<br> ";
	}
	
	/**
	 * Logo display
	 * 
	 * @return void
	 */
	public function displayLogo() {
		printf("Logo: %s <br>",$this->logo);
	}
}
