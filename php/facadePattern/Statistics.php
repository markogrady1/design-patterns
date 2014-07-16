<?php namespace php\facadePattern;

class Statistics{

	private $facade;

	public function __construct(DataFacade $facade){ 
		$this->facade = $facade;
	}

	public function retrieveData($passID){
		$clientData = new ClientData();
		$allData = $this->facade->retrieveStats($passID);
		$clientData->setPassenger($allData['passenger']);
		$clientData->setFlight($allData['flight']);
		$clientData->setBaggage($allData['baggage']);
	}
}