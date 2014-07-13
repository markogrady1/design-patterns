<?php  namespace php\facadePattern;

class ClientData{
	private $passenger;
	private $flight;
	private $baggage;
	
    public function setPassenger($passenger){
		print $this->passenger = $passenger.'<br>';
	}

	public function setFlight($flight){
		print 'Flight: '.$this->flight = $flight.'<br>';
	}

	public function setBaggage($baggage){
		print 'Baggage: '.$this->baggage = $baggage;
	}
}