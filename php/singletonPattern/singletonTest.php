<?php 
include 'autoload.php';

class singletonTest extends PHPUnit_Framework_TestCase{
	private $voucherInstance;

	public function testGetVoucher(){
		$this->voucherInstance = new VoucherCheck();
		$this->assertEquals($this->voucherInstance,new VoucherCheck());
	}
	public function testSignIn(){
	$this->voucherInstance = new VoucherCheck();
		$this->assertEquals(null,$this->voucherInstance->signIn());
	}
}
