<?php  namespace php\strategyPattern;
/*
|==================================================================
|
|-------------------------------------------------------------------
|	The abstract Character class is the 'Client' in this pattern
|------------------------------------------------------------------=
|
|====================================================================
|=
*/
abstract class Character {

	private	$weapon;
	
	public function setWeapon(Weapon $weapon){
		$this->weapon = $weapon;
	}
	
	public function useWeapon(){
		$this->weapon->action();
	}
}
