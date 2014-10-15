<?php  namespace php\observerPattern;
/*
|=====================================================================
|
|----------------------------------------------------------------------
|	The MagazineUser is the 'concrete-observer' in this pattern
|----------------------------------------------------------------------
|
|======================================================================
|
*/
class MagazineUser implements User {
	
	/**
	 * Conference city
	 * 
	 * @var string $city
	 */
	private $city;
		
	/**
	 * Conference price
	 * 
	 * @var int $price
	 */
	private $price;
	/**
	 * Conference venue
	 * 
	 * @var string $venue
	 */
	private $venue;

	/**
	 * Register user to conference
	 * 
	 * @param Administrator $admin
	 * @return void
	 */
	public function userReg(Administrator $admin) {
		$this->data = $admin;
		$this->data->registerUser(new MagazineUser);
	}
	
	/**
	 * Update conference details
	 * 
	 * @param string $city
	 * @param int $price 
	 * @param string $venue
	 * @return void
	 */
	public function update($city, $price, $venue) {
		$this->city = $city;
		$this->price = $price;
		$this->venue = $venue;
	}
	
}
