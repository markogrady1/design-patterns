<?php  

class ClientData {
	private $passenger;
	private $flight;
	private $baggage;
	
    public function setPassenger($passenger) {
		print $this->passenger = $passenger . '<br>';
	}

	public function setFlight($flight) {
		print 'Flight: ' . $this->flight = $flight . '<br>';
	}

	public function setBaggage($baggage) {
		print 'Baggage: ' . $this->baggage = $baggage;
	}
}



class Statistics {

	private $facade;
	
	private $clientData;
	
	public function __construct(DataFacade $facade, ClientData $clientData) { 
		$this->facade = $facade;
		$this->clientData = $clientData;
	}

	public function retrieveData($passID) {
		
		$allData = $this->facade->retrieveStats($passID);
		$this->clientData->setPassenger($allData['passenger']);
		$this->clientData->setFlight($allData['flight']);
		$this->clientData->setBaggage($allData['baggage']);
	}
}


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



/*
|==========================================================================
|--------------------------------------------------------------------------
|	The values for the properties would usually be obtained from a database
|--------------------------------------------------------------------------
|==========================================================================
*/
class Passenger {

	private $passengerName = 'Bob Brown'; 
	private $passengerAddress = 'London';
	private $passengerAge = '41';
	private $id;

	public function __construct($passID) {
		$this->id = $passID;
	}

	public function getPassengerName() {
		
		return $this->passengerName;
	}

	public function getPassengerAddress() {
		
		return $this->passengerAddress;
	}

	public function getPassengerAge() {
		
		return $this->passengerAge;
	}
}


/*
|========================================================================
|------------------------------------------------------------------------
| The values for the properties would usually be obtained from a database
|------------------------------------------------------------------------
|========================================================================
*/
class Flight { 
  private $flightNo = 'A1W78783';
  private $airLine = 'PHPAir';
  private $depatureTime = '11-10-14 | 04:43';
  private $id;

	public function __construct($passID) {
		$this->id = $passID;
	}

	public function getFlightNo() {
		
		return $this->flightNo;
	}

	public function getAirLine() {
		
		return $this->airLine;
	}

	public function getDepatureTime() {
		
		return $this->depatureTime;
	}
}

 
 /*
|========================================================================
|------------------------------------------------------------------------
| The values for the properties would usually be obtained from a database
|------------------------------------------------------------------------
|========================================================================
*/
class Baggage {
  private $totalWeight = '5KG';
  private $amount = '3';
  private $allAccountedFor = 'true';
  private $id;

  	public function __construct($passID) {
		$this->id = $passID;
  	}  

  	public function getTotalWeight() {
  		
  		return $this->totalWeight;
  	}

	public function getAmount() {
		
  		return $this->amount;
  	}

	public function getAllAccountedFor() {
		
  		return $this->allAccountedFor;
  	}

}


$stats = new Statistics(new DataFacade(), new ClientData());

$stats->retrieveData('319YX');
