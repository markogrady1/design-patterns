<?php namespace php\facadePattern;

class DataFacade {

private $passengerNo;

       /**
	* Assign various statistics for a given passenger to an array
	* 
	* @param string $passID
	* @return array 
	*/
	public function retrieveStats($passID) {
		$this->passengerNo = 'Passenger: ' . $passID;
		$details =  array(
				'passenger'	=> $this->getPassengerDetails($passID),
				'flight'	=> $this->getFlightDetails($passID),
				'baggage'	=> $this->getBaggageDetails($passID)
				);
				
		return $details;		
	} 
	
       /**
	* Get a given passengers details in string format
	* 
	* @param string $passID
	* @return string
	*/
	public function getPassengerDetails($passID) {
		$passenger = new Passenger($passID);
		$passengerDetails = $this->passengerNo;
		$passengerDetails .= ', ' . $passenger->getPassengerName();
		$passengerDetails .= ', ' . $passenger->getPassengerAddress();
		$passengerDetails .= ', ' . $passenger->getPassengerAge();
		
		return $passengerDetails;
	} 
	
       /**
	* Get a given passengers flight details in string format
	* 
	* @param string $passID
	* @return string
	*/
	public function getFlightDetails($passID) {
		$flight = new Flight($passID);
		$flightDetails 	= $flight->getFlightNo();
		$flightDetails .= ', ' . $flight->getAirLine();
		$flightDetails .= ', ' . $flight->getDepatureTime();
		
		return $flightDetails;
	}
	
       /**
	* Get a given passengers baggage details in string format
	* 
	* @param string $passID
	* @return string
	*/
	public function getBaggageDetails($passID) {
		$baggage = new Baggage($passID);
		$bagDetails = $baggage->getAmount();
		$bagDetails .= ', ' . $baggage->getTotalWeight();
		$bagDetails .= ', ' . $baggage->getAllAccountedFor();

		return $bagDetails;
	}
}
