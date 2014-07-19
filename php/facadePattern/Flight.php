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

	public function getFlightNo(){
		return $this->flightNo;
	}

	public function getAirLine(){
		return $this->airLine;
	}

	public function getDepatureTime(){
		return $this->depatureTime;
	}
}