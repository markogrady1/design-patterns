<?php 
include_once('User.php');
include_once('Administrator.php');
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
