<?php 
/*
|==================================================
|--------------------------------------------------
|	Check  whether instance exists already
|--------------------------------------------------
|==================================================
*/
class VoucherProvider{
	private static $instance = null;
	public static function getVoucher(){
		if(self::$instance == null){
			self::$instance = new VoucherProvider();
			self::$instance->setDateStamp();
			return 'instance created';
		}
		return self::$instance;
	}

	public function setDateStamp(){
		// start date stamp
	}
}
