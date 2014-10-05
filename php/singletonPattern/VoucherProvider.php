<?php 
/*
|==================================================
|--------------------------------------------------
|	Check  whether instance exists already
|--------------------------------------------------
|==================================================
*/
class VoucherProvider{
	
	/**
	 * Single instance of VoucherProvider
	 * 
	 * @var $instance
	 */
	private static $instance = null;

	private function __construct() {

	}
	
	/**
	 * Create single instance of VoucherProvider
	 * 
	 * @return VoucherProvider $instance
	 */
	public static function getVoucher() {
		if(self::$instance == null) {
		   self::$instance = new VoucherProvider();
		   self::$instance->setDateStamp();
		   echo 'instance created';
		}
		
		return self::$instance;
	}
	
	/**
	 * Stamp time of instance creation
	 * 
	 * @return void
	 */
	public function setDateStamp() {
		// start date stamp
	}
}
