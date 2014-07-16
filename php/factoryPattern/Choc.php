<?php  namespace php\factoryPattern;
class Choc extends Cookie{
	
	public function __construct(){
		$this->topping = 'Choc chips';
		$this->flavour = 'chocolate-flava';
		$this->name = 'chocolate';
	}
}