<?php 
include 'VoucherProvider.php';

class VoucherCheck{

	public function __construct() {}
	
	/**
	 * Supply voucher 
	 * 
	 * @return void
	 */
	public function signIn() {
		
		$newVoucher = VoucherProvider::getVoucher();
		
	}

}


