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
