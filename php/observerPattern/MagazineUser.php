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
