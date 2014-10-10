<?php namespace php\observerPattern;
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
class AdminDesk implements Administrator {
	
	/**
	 * User instance
	 * 
	 * @var User $user
	 */
	private $user;
		
	/**
	 * Conference city
	 * 
	 * @var string $city
	 */
	private $city;
		
	/**
	 * Conference price
	 * 
	 * @var int price
	 */
	private $price;
		
	/**
	 * Conference venue
	 * 
	 * @var string $venue
	 */
	private $venue;
		
	/**
	 * Observer variable
	 * 
	 * @var array $observer
	 */
	private $observer = array();
	
	/**
	 * Register user for conference
	 * 
	 * @param User $user
	 * @return void
	 */
	public function registerUser(User $user) {
		$this->observer[] = $user;
		
	}
	
	/**
	 * Remove user from the conference list
	 * 
	 * @param User $user
	 * @return void
	 */
	public function removeUser(User $user) {
		foreach ($this->observer as $obs => $val) {
			if($val === $user) {
				unset($this->observer[$obs]);	
			}
		}	
	}
		
	/**
	 * Notify user of any changes to conference
	 *
	 * @return void
	 */
	public function notifyUser() {

		foreach($this->observer as $observer) {
			$observer->update($this->city, $this->price, $this->venue);
		}
	}
	
	/**
	 * Send meeting details to conference member
	 * 
	 * @return void
	 */
	public function sendConferenceDetails() {
		$this->notifyUser();
	}
	
	/**
	 * Finalize conference location and meeting time
	 * 
	 * @param string $conferenceCity
	 * @param string $conferencePrice
	 * @param string $conferenceVenue
	 * @return void
	 */
	public function setConferenceDetails($conferenceCity, $conferencePrice, $conferenceVenue) {
		$this->city = $conferenceCity;
		$this->price = $conferencePrice;
		$this->venue = $conferenceVenue;
		$this->sendConferenceDetails();
	}
	
	/**
	 * Display finalized conference details
	 * 
	 * @return void
	 */
	public function displayDetails() {
		echo "New conference details:<br>City Location: " . $this->city . "<br>Conference price: " . $this->price . "<br>Conference venue: " . $this->venue;
	}
}
