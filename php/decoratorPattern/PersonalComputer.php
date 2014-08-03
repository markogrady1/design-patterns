<?php  namespace php\decoratorPattern;

class PersonalComputer extends Hardware {

	public function __construct(){
		$this->description = "DELL PC";
	}
	
	public function cost(){
		
		return 500;
	}
}
