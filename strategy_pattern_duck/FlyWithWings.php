<?php 
require_once 'FlyBehavior.php';
class FlyWithWings implements FlyBehavior {
	public function fly(){
		echo "I am flying with wings<br>";
	}
}