<?php namespace php\facadePattern;
 
class Baggage{
  private $totalWeight;
  private $amount;
  private $allAccountedFor;
  private $id;

  	public function __construct($passID){
		$this->id = $passID;
  	}  

  	public function getTotalWeight(){
  		return '5KG';
  	}

	public function getAmount(){
  		return '3';
  	}

	public function getAllAccountedFor(){
  		return 'true';
  	}

}