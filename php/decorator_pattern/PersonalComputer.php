<?php 
include_once 'Hardware.php';
class PersonalComputer extends Hardware {
	public function __construct(){
		$this->description = "DELL PC";
	}
	public function cost(){
		return 500;
	}
}