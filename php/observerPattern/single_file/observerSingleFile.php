<?php 
/*
|===========================================================
|
|-----------------------------------------------------------
|	The Administrator is the 'Subject' in this pattern
|-----------------------------------------------------------
|
|===========================================================
|
*/
interface Administrator {
	public function registerUser(User $user);
	public function removeUser(User $user);
	public function notifyUser();
}

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
	 * @var string $price
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
		echo "New conference details:<br>City Location: ".$this->city."<br>Conference price: ".$this->price."<br>Conference venue: ".$this->venue;
	}
}

/*
|=====================================================================
|
|----------------------------------------------------------------------
|	The User is the 'Observer' in this pattern
|----------------------------------------------------------------------
|
|======================================================================
|
*/
interface User {
    public function update($city, $price, $venue);
}

class ApplicationUser implements User {
	private $city;
	private $price;
	private $venue;
	private $data;

	public function userReg(Administrator $admin) {
		$this->data = $admin;
		$this->data->registerUser(new ApplicationUser);
	}
	
	public function update($city, $price, $venue) {
		$this->city = $city;
		$this->price = $price;
		$this->venue = $venue;
	}
	
}

class MagazineUser implements User {
	private $city;
	private $price;
	private $venue;

	public function userReg(Administrator $admin) {
		$this->data = $admin;
		$this->data->registerUser(new MagazineUser);
	}
	
	public function update($city, $price, $venue) {
		$this->city = $city;
		$this->price = $price;
		$this->venue = $venue;
	}
	
}

/**
 * Implimentation
 */
$adminDesk = new AdminDesk();

$magUser = new MagazineUser();

$magUser->userReg($adminDesk);

$appUser = new ApplicationUser();

$appUser->userReg($adminDesk);

$adminDesk->setConferenceDetails('London', 1000, 'Prince Albert Hall');

$adminDesk->setConferenceDetails('New York', 20000, 'New Jersey Hall');

$adminDesk->displayDetails();

$adminDesk->removeUser($magUser);
