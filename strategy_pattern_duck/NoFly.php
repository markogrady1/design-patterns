<?php 
require_once 'FlyBehavior.php';

class NoFly implements FlyBehavior {
	public function fly(){
		echo "I cannot fly<br>";
	}
}