<?php namespace php\proxyPattern;


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