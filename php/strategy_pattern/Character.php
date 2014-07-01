<?php 

abstract class Character {

	private	$weapon;
	
	public function setWeapon(Weapon $weapon){
		$this->weapon = $weapon;
	}
	
	public function useWeapon(){
		$this->weapon->action();
	}
}