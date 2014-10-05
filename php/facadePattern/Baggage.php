<?php  namespace php\facadePattern;
 /*
|========================================================================
|------------------------------------------------------------------------
| The values for the properties would usually be obtained from a database
| Values have been explicitly added for example purposes.
|------------------------------------------------------------------------
|========================================================================
*/
class Baggage {
	
	/**
	 * Total weight of baggage
	 * 
	 * @var string $totalWeight
	 */
	  private $totalWeight = '5KG';
	  
	/**
	 * Default baggage ammount
	 * 
	 * @var string $ammount
	 */
	  private $amount = '3';
	  
	/**
	 * Total weight of baggage
	 * 
	 * @var string $accountedFor
	 */
	  private $isBaggageAccountedFor = 'true';
	  
	/**
	 * Baggage ID
	 * 
	 * @var string $id
	 */
	  private $id;
	
	/**
	 * Obtain ID when object is created
	 * 
	 * @param string $passID
	 * @return void
	 */
  	public function __construct($passID) {
		$this->id = $passID;
  	}  
       /**
	* Get total weight of baggage
	* 
	* @return string
	*/ 
  	public function getTotalWeight() {
  		
  		return $this->totalWeight;
  	}

       /**
	* Get amount baggage ammout
	* 
	* @return string
	*/ 
	public function getAmount() {
		
  		return $this->amount;
  	}

       /**
	* Query all bags are accounted for
	* 
	* @return string
	*/ 
	public function getAllAccountedFor() {
		
  		return $this->isBaggageAccountedFor;
  	}

}
