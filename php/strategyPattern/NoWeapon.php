<?php  namespace php\strategyPattern;

class NoWeapon implements Weapon{
	
	public function action(){
		echo 'Oh-No I have no Weapon<br>';
	}
} 