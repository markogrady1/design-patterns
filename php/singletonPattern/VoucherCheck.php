<?php 
include 'VoucherProvider.php';

class VoucherCheck{

	public function __construct(){}

	public function signIn(){
		$newVoucher = VoucherProvider::getVoucher();
	}

}


