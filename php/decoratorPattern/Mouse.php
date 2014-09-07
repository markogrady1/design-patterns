<?php  namespace php\decoratorPattern;

class Mouse extends HardwareDecorator{
	
	/**
	* Hardware instance
	* 
	* @var $hardware
	*/
	protected $hardware;
	
	/**
	* Acquire Hardware dependency
	*
	* @param Hardware $hardware
	*/
	public function __construct(Hardware $hardware){
		$this->hardware = $hardware;
	}
	
	/**
	* Get the description of mouse
	* 
	* @return string
	*/
	public function getDescription(){
		$this->description .= $this->hardware->getDescription() . ' + Mouse';
		
		return $this->description;
	}
	
	/**
	* Get cost of mouse
	* 
	* @return int
	*/
	public function cost(){
		
		return $this->hardware->cost() + 40;
	}

}

