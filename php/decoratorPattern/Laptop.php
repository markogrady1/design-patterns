<?php namespace php\decoratorPattern;

class Laptop extends Hardware{

	public function __construct(){
		$this->description ="19'' Laptop";
	}
	
	/**
	* Gets cost of the laptop
	*
	* @return int
	*/
	public function cost(){
		
		return 200;
	}
}
