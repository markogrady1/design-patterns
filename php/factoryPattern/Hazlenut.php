<?php  namespace php\factoryPattern;

class Hazlenut extends Cookie {
	
	public function __construct() {
		$this->topping = 'hazlenut-bits';
		$this->flavour = 'nutty';
		$this->name = 'hazlenut';
	}
}
