<?php 

class VoucherCheck{

	public function __construct($id){
		if($id == 'AZH9JD')
			signIn();
	}

	public function signIn(){
		$newVoucher = VoucherProvider::getVoucher();
	}

}

class VoucherProvider{
	private static $instance = null;
	
	private function __construct(){
		
	}
	public static function getVoucher(){
		if(self::$instance == null){
			self::$instance = new VoucherProvider();
			self::$instance->setDateStamp();
		}
		return self::$instance;
	}

	public function setDateStamp(){
		// start date stamp
	}
}
