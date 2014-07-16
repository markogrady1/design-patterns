<?php  namespace php\facadePattern;
/*
|==========================================================================
|--------------------------------------------------------------------------
|	The values for the properties would usually be obtained from a database
|--------------------------------------------------------------------------
|==========================================================================
*/
class Passenger{

	private $passengerName = 'Bob Brown'; 
	private $passengerAddress = 'London';
	private $passengerAge = '41';
	private $id;

	public function __construct($passID){
		$this->id = $passID;
	}

	public function getPassengerName(){
		return $this->passengerName;
	}

	public function getPassengerAddress(){
		return $this->passengerAddress;
	}

	public function getPassengerAge(){
		return $this->passengerAge;
	}
}