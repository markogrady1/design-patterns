<?php  

class ClientData {
	
	/**
	 * Passenger details
	 * 
	 * @var array $passenger
	 */
	private $passenger;

	 /**
	  * Flight details
	  * 
	  * @var array $flight
	  */	
	private $flight;
	
	 /**
	  * Baggage details
	  * 
	  * @var array $baggage
	  */
	private $baggage;
	
	/**
	 * Passenger details set and displayed
	 * 
	 * @param array $passenger
	 * @return void
	 */
    	public function setPassenger($passenger) {
		print $this->passenger = $passenger . '<br>';
	}
	
	/**
	 * Flight details set and displayed
	 * 
	 * @param array $flight
	 * @return void
	 */
	public function setFlight($flight) {
		print 'Flight: ' . $this->flight = $flight . '<br>';
	}
	
	/**
	 * baggage details set and displayed
	 * 
	 * @param array $baggage
	 * @return void
	 */
	public function setBaggage($baggage) {
		print 'Baggage: ' . $this->baggage = $baggage;
	}
}



class Statistics {
	
	/**
	 * Facade instance
	 * 
	 * @var DataFacade $facade
	 */
	private $facade;
	
	/**
	 * ClientData instance
	 * 
	 * @var ClientData $clientData
	 */
	private $clientData;
	
	public function __construct(DataFacade $facade, ClientData $clientData) { 
		
		$this->facade = $facade;
		
		$this->clientData = $clientData;
	}
	
	/**
	 * Retrieve passenger and flight details and assign the values
	 * 
	 * @param string $passID
	 * @return void
	 */
	public function retrieveData($passID) {
		
		$allData = $this->facade->retrieveStats($passID);
		
		$this->clientData->setPassenger($allData['passenger']);
		
		$this->clientData->setFlight($allData['flight']);
		
		$this->clientData->setBaggage($allData['baggage']);
	}
}


class DataFacade {

private $passengerNo;

	/**
	 * Store details of passengers flight into array
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
	 * Return various details of a given passenger
	 * 
	 * @param string $passID
	 * @return string $passengerDetails
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
	 * Return various details of a given passengers flight
	 * 
	 * @param string $passID
	 * @return string $flightDetails
	 */
	public function getFlightDetails($passID) {
		$flight = new Flight($passID);
		$flightDetails 	= $flight->getFlightNo();
		$flightDetails .= ', ' . $flight->getAirLine();
		$flightDetails .= ', ' . $flight->getDepatureTime();
		
		return $flightDetails;
	}
	
	/**
	 * Return various details of a given passengers baggage
	 * 
	 * @param string $passID
	 * @return string $bagDetails
	 */
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
	
	/**
	 * Name of passenger
	 * 
	 * @var string $passengerName
	 */
	private $passengerName = 'Bob Brown'; 
	
	/**
	 * Address of passenger
	 * 
	 * @var string $passengerAddress
	 */
	private $passengerAddress = 'London';
	
	/**
	 * Age of passenger 
	 * 
	 * @var string $passengerAge
	 */
	private $passengerAge = '41';
	
	/**
	 * passenger ID
	 * 
	 * @var string $id
	 */
	private $id;

	public function __construct($passID) {
		$this->id = $passID;
	}

	/**
	 * Return nane of passenger
	 * 
	 * @return string $passengerName
	 */
	public function getPassengerName() {
		
		return $this->passengerName;
	}


	/**
	 * Return address of passenger
	 * 
	 * @return string $passengerAddress
	 */
	public function getPassengerAddress() {
		
		return $this->passengerAddress;
	}


	/**
	 * Return age of passenger
	 * 
	 * @return string $passengerAge
	 */
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
		
	/**
	 * Reference number of flight
	 * 
	 * @var string $flightNo
	 */
  	private $flightNo = 'A1W78783';
  		
	/**
	 * Name of airline
	 * 
	 * @var string $airline
	 */
  	private $airline = 'PHPAir';
  		
	/**
	 * Time of flight departure
	 * 
	 * @var string $departureTime
	 */
  	private $depatureTime = '11-10-14 | 04:43';
  		
	/**
	 * Passenger ID
	 * 
	 * @var string $id
	 */
  	private $id;

	public function __construct($passID) {
		$this->id = $passID;
	}

	/**
	 * Return flight number
	 * 
	 * @return string $flightNo
	 */
	public function getFlightNo() {
		
		return $this->flightNo;
	}

	/**
	 * Return name of airline
	 * 
	 * @return string $airline
	 */
	public function getAirLine() {
		
		return $this->airline;
	}

	/**
	 * Return time of departure
	 * 
	 * @return string $departureTime
	 */
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
	  		
	/**
	 * baggage weight
	 * 
	 * @var string $totalWeight
	 */
  	private $totalWeight = '5KG';
  	  		
	/**
	 * Baggage amount
	 * 
	 * @var string $amount
	 */
  	private $amount = '3';
  	  		
	/**
	 * Are all bags accounted for
	 * 
	 * @var boolean $isBaggageAccountedFor
	 */
  	private $isBaggageAccountedFor = 'true';
  	  		
	/**
	 * Passenger ID
	 * 
	 * @var string $id
	 */
  	private $id;

	/**
	 * Constructor to assign passengers ID
	 * 
	 * @return viod
	 */
  	public function __construct($passID) {
		$this->id = $passID;
  	}  

	/**
	 * Return total weight of bags
	 * 
	 * @return string $totalWeight
	 */
  	public function getTotalWeight() {
  		
  		return $this->totalWeight;
  	}

	/**
	 * Return amount of bags
	 * 
	 * @return string $amount
	 */
	public function getAmount() {
		
  		return $this->amount;
  	}

	/**
	 * Return true if all bags are accounted for
	 * 
	 * @return string $allAccountedFor
	 */
	public function getAllAccountedFor() {
		
  		return $this->isBaggageAccountedFor;
  	}

}


$stats = new Statistics(new DataFacade(), new ClientData());

$stats->retrieveData('319YX');
