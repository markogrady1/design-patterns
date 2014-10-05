<?php  namespace php\facadePattern;
/*
|==========================================================================
|--------------------------------------------------------------------------
| 	The values for the properties would usually be obtained from a database
| 	Values have been explicitly added for example purposes.
|--------------------------------------------------------------------------
|==========================================================================
*/
class Flight{ 
  private $flightNo = 'A1W78783';
  private $airLine = 'PHPAir';
  private $depatureTime = '11-10-14 | 04:43';
  private $id;

	public function __construct($passID){
		$this->id = $passID;
	}
	
       /**
	* Get flight number
	* 
	* @return string
	*/
	public function getFlightNo(){
		
		return $this->flightNo;
	}
	
       /**
	* Get name of airline
	* 
	* @return string
	*/
	public function getAirLine(){
		
		return $this->airLine;
	}
	
       /**
	* Get flight departure time
	* 
	* @return string
	*/
	public function getDepatureTime(){
		
		return $this->depatureTime;
	}
}
