<?php    namespace php\facadePattern;

class ClientData {
	private $passenger;
	private $flight;
	private $baggage;
	
   /**
   * Set passenger value
   * 
   * @param string $passenger
   */
    public function setPassenger($passenger) {
		print $this->passenger = $passenger . '<br>';
    }
	
    /**
     * Set flight number
     * 
     * @param string $flight
     */ 
    public function setFlight($flight) {
		print 'Flight: ' . $this->flight = $flight . '<br>';
    }

    /**
     * Set baggage value
     * 
     * @param string $baggage
     */
    public function setBaggage($baggage) {
		print 'Baggage: ' . $this->baggage = $baggage;
    }
}
