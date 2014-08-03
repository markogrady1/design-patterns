<?php namespace php\decoratorPattern;

class Laptop extends Hardware{

	public function __construct(){
		$this->description ="19'' Laptop";
	}
	
	public function cost(){
		
		return 200;
	}
}
