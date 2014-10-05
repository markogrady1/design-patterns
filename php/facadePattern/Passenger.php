<?php  namespace php\facadePattern;
/*
|==========================================================================
|--------------------------------------------------------------------------
|	The values for the properties would usually be obtained from a database
| 	Values have been explicitly added for example purposes.
|--------------------------------------------------------------------------
|==========================================================================
*/
class Passenger{
	
       /**
	* Name of the passenger
	* 
	* @var string $passengerName
	*/
	private $passengerName = 'Bob Brown'; 
	
       /**
	* Address of the passenger
	* 
	* @var string $passengerAddress
	*/
	private $passengerAddress = 'London';
	
       /**
	* Age of the passenger
	* 
	* @var string $passengerAge
	*/
	private $passengerAge = '41';
	
       /**
	* The passenger ID
	* 
	* @var string $id
	*/
	private $id;

	public function __construct($passID){
		$this->id = $passID;
	}

       /**
	* Get the passenger name
	* 
	* @return string
	*/
	public function getPassengerName(){
		
		return $this->passengerName;
	}
	
       /**
	* Get the address of the passenger
	* 
	* @return string
	*/
	public function getPassengerAddress(){
		
		return $this->passengerAddress;
	}
	
       /**
	* Get the age of the passenger
	* 
	* @return string
	*/
	public function getPassengerAge(){
		
		return $this->passengerAge;
	}
}
