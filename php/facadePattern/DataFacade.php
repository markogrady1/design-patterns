<?php namespace php\facadePattern;

class DataFacade {

private $passengerNo;

	public function retrieveStats($passID) {
		$this->passengerNo = 'Passenger: ' . $passID;
		$details =  array(
				'passenger'	=> $this->getPassengerDetails($passID),
				'flight'	=> $this->getFlightDetails($passID),
				'baggage'	=> $this->getBaggageDetails($passID)
				);
				
		return $details;		
	} 

	public function getPassengerDetails($passID) {
		$passenger = new Passenger($passID);
		$passengerDetails = $this->passengerNo;
		$passengerDetails .= ', ' . $passenger->getPassengerName();
		$passengerDetails .= ', ' . $passenger->getPassengerAddress();
		$passengerDetails .= ', ' . $passenger->getPassengerAge();
		
		return $passengerDetails;
	} 

	public function getFlightDetails($passID) {
		$flight = new Flight($passID);
		$flightDetails 	= $flight->getFlightNo();
		$flightDetails .= ', ' . $flight->getAirLine();
		$flightDetails .= ', ' . $flight->getDepatureTime();
		
		return $flightDetails;
	}

	public function getBaggageDetails($passID) {
		$baggage = new Baggage($passID);
		$bagDetails = $baggage->getAmount();
		$bagDetails .= ', ' . $baggage->getTotalWeight();
		$bagDetails .= ', ' . $baggage->getAllAccountedFor();

		return $bagDetails;
	}
}
