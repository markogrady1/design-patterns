<?php  namespace php\strategyPattern;

class Gun implements Weapon{
	
	public function action(){
		echo 'BLAM BLAM<br>';
	}
}