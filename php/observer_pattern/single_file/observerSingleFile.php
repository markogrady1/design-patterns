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
interface Administrator{
	public function registerUser(User $user);
	public function removeUser(User $user);
	public function notifyUser();
}

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

class ApplicationUser implements User{
	private $city;
	private $price;
	private $venue;
	private $data;

	public function userReg(Administrator $admin){
		$this->data = $admin;
		$this->data->registerUser(new ApplicationUser);
	}
	
	public function update($city, $price, $venue){
		$this->city = $city;
		$this->price = $price;
		$this->venue = $venue;
	}
	
}

class MagazineUser implements User{
	private $city;
	private $price;
	private $venue;

	public function userReg(Administrator $admin){
		$this->data = $admin;
		$this->data->registerUser(new MagazineUser);
	}
	
	public function update($city, $price, $venue){
		$this->city = $city;
		$this->price = $price;
		$this->venue = $venue;
	}
	
}
/*
|
|----------------------------------
|	implementation
|----------------------------------
|
*/
$adminDesk = new AdminDesk();

$magUser = new MagazineUser();
$magUser->userReg($adminDesk);
$appUser = new ApplicationUser();
$appUser->userReg($adminDesk);

$adminDesk->setConferenceDetails('London',1000,'Prince Albert Hall');
$adminDesk->setConferenceDetails('New York',20000,'New Jersey Hall');
$adminDesk->displayDetails();
