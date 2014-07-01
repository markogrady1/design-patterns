<?php 

require 'FlyBehavior.php';
require 'QuackBehavior.php';

class Duck{

	public $flyBehavior;
	public $quackBehavior;

	public function __construct(){
	
	}
	
	public function performFly(){
	$this->flyBehavior->fly();
	}
	public function performQuack(){
	$this->quackBehavior->quack();
	}
	public function setFlyBehavior(FlyBehavior $flyBehavior){
		$this->flyBehavior = $flyBehavior;
	}
	public function setQuackBehavior(QuackBehavior $quackBehavior){
		$this->quackBehavior = $quackBehavior;
	}

	public function display(){

	}
}