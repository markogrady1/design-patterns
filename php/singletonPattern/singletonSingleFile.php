<?php 

class VoucherCheck{

	public function __construct($id) {
		if($id == 'AZH9JD')
			$this->signIn();
	}
	
	/**
	 * Provide instance of VoucherProvider
	 * 
	 * @return void
	 */
	public function signIn() {
		
		$newVoucher = VoucherProvider::getVoucher();
	}

}

class VoucherProvider {
	
	/**
	 * Single instance of the VoucherProvider
	 * 
	 * @var VoucherProvider $instance
	 */
	private static $instance = null;
	
	private function __construct() {
		
	}
	
	/**
	 * Provide existing instance or new instance
	 * 
	 * @return VoucherProvider $instance
	 */
	public static function getVoucher() {
		if(self::$instance == null) {
		   self::$instance = new VoucherProvider();
		   echo 'Voucher sent';
		   self::$instance->setDateStamp();
		}
		
		return self::$instance;
	}
	
	
	public function setDateStamp(){
		// start date stamp
	}
}
$voucher = new VoucherCheck('AZH9JD');
