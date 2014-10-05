<?php  namespace php\decoratorPattern;

class PersonalComputer extends Hardware {
	
	/**
	* Set description of PC
	* 
	* @return void
	*/
	public function __construct(){
		$this->description = "DELL PC";
	}
	
	/**
	* Get cost of PC
	* 
	* @return int 
	*/
	public function cost(){
		
		return 500;
	}
}
