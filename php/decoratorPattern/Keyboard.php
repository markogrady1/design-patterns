<?php  namespace php\decoratorPattern;

class Keyboard extends HardwareDecorator{
	protected $hardware;

	public function __construct(Hardware $hardware){
		$this->hardware = $hardware;
	}
	
	/**
	* Gets decription of hardware
	* 
	* @return string
	*/
	public function getDescription(){
		$this->description .= $this->hardware->getDescription().' + keyboard';
	
		return $this->description;
	}
	
	/**
	* Gets cost of hardware
	* 
	* @return int
	*/
	public function cost(){
		
		return $this->hardware->cost()+60;
	}
}
