<?php 
/*
|==============================================================
|
|--------------------------------------------------------------
|	The AdminDesk is the 'concrete-subject' in this pattern
|--------------------------------------------------------------
|
|==============================================================
|
*/
include_once('Administrator.php');
include_once('User.php');

class AdminDesk implements Administrator{
	private $user;
	private $city;
	private $price;
	private $venue;
	private $observer = array();

	public function registerUser(User $user){
		$this->observer[] = $user;
		
	}

	public function removeUser(User $user){
		unset($this->observer[$user]);	
	}
	
	public function notifyUser(){

		foreach($this->observer as $observer){
			$observer->update($this->city,$this->price,$this->venue);
		}
	}

	public function sendConferenceDetails(){
		$this->notifyUser();
	}

	public function setConferenceDetails($conferenceCity,$conferencePrice,$conferenceVenue){
		$this->city = $conferenceCity;
		$this->price = $conferencePrice;
		$this->venue = $conferenceVenue;
		$this->sendConferenceDetails();
	}

	public function displayDetails(){
		echo "New conference details:<br>City Location: ".$this->city."<br>Conference price: ".$this->price."<br>Conference venue: ".$this->venue;
	}
}
