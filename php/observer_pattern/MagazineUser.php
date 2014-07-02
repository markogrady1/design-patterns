<?php 
include_once('User.php');
include_once('Administrator.php');
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
