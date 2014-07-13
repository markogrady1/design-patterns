<?php namespace php\facadePattern;

class Flight{ 
  private $flightNo;
  private $airLine;
  private $depatureTime;
  private $id;

	public function __construct($passID){
		$this->id = $passID;
	}

	public function getFlightNo(){
		return 'A1W78783';
	}

	public function getAirLine(){
		return 'PHPAir';
	}

	public function getDepatureTime(){
		return '11-10-14 | 04:43';
	}
}