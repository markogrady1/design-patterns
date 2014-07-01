<?php 
require_once 'Duck.php';
require_once 'Quack.php';
require_once 'FlyWithWings.php';
require_once 'RocketFly.php';
class Mallard extends Duck{

	public function __construct(){
		$this->quackBehavior = new Quack();
		$this->flyBehavior = new FlyWithWings();
	}
	public function display(){
		echo "I am a mallard<br>";
	}
}