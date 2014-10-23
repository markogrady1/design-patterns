<?php namespace php\proxyPattern;


class ProxyLogo implements Logo {
	
	/**
	 * Logo instance
	 * 
	 * @var Logo $logo
	 */
	private $logo;
		
	/**
	 * RealLogo instance
	 * 
	 * @var Logo $display
	 */
	private $display;

	public function __construct($logo) {
		$this->logo = $logo;
	}
	
	/**
	* Display the logo
	*
	* @return Logo $display
	*/
	public function displayLogo() {
		if(is_null($this->display))
			$this->display = new RealLogo($this->logo);
			
		return $this->display->displayLogo();
	}
}
