<?php  namespace php\observerPattern;
/*
|=====================================================================
|
|----------------------------------------------------------------------
|	The ApplicationUser is the 'concrete-observer' in this pattern
|----------------------------------------------------------------------
|
|======================================================================
|
*/
class ApplicationUser implements User {
	
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
	 * Administrator instance
	 * 
	 * @var string $venue
	 */
	private $venue;
		
	/**
	 * Conference city
	 * 
	 * @var Administrator $admin
	 */
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
