<?php  namespace php\factoryPattern;

class DoubleChoc extends Cookie {
	
	public function __construct() {
		$this->topping = 'Choc-Chunks';
		$this->flavour = 'Rich Choccy';
		$this->name = 'double choc';
	}
}
