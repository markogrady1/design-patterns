<?php namespace php\facadePattern;

class Passenger{
	private $passengerName; 
	private $passengerAddress;
	private $passengerAge;
	private $id;

	public function __construct($passID){
		$this->id = $passID;
	}

	public function getPassengerName(){
		return 'Bob Brown';
	}

	public function getPassengerAddress(){
		return 'London';
	}

	public function getPassengerAge(){
		return '41';
	}
}