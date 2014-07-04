<?php 

class VoucherCheck{

	public function __construct(){}

	public function signIn(){
		$newVoucher = VoucherProvider::getVoucher();
	}

}
/*
|================================================
|------------------------------------------------
|	Class ensures only one instance is created
|	The private constructor means only the
|	getVoucher method can create an instance
|------------------------------------------------
|================================================
*/
class VoucherProvider{
	private static $instance = null;

	private function __construct(){
		
	}
	public static function getVoucher(){
		if(self::$instance == null){
			self::$instance = new VoucherProvider();
			self::$instance->setDateStamp();
			echo 'instance created<br>';
		}
		return self::$instance;
	}

	public function setDateStamp(){
		// start date stamp
	}
}

