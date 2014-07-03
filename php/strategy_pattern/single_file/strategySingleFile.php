<?php 
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

class King extends Character{

	public function shout(){
		echo "I am the King<br>";
	}
}

class Prince extends Character{

	public function shout(){
		echo "I am a prince<br>";
	}
}

interface Weapon{
	
public function action();
}

class Axe implements Weapon{

	public function action(){
		echo 'Swing Swing<br>';
	}
}

class Sword implements Weapon{
	
	public function action(){
		echo 'slash slash<br>';
	}
}

class Gun implements Weapon{
	
	public function action(){
		echo 'BLAM BLAM<br>';
	}
}

class BAzooka implements Weapon{
	
	public function action(){
		echo 'Bazoooom!!!<br>';
	}
}

class NoWeapon implements Weapon{
	
	public function action(){
		echo 'Oh-No I have no Weapon<br>';
	}
}

$king = new King;
$king->shout();
$king->setWeapon(new Axe);
$king->useWeapon();
$king->setWeapon(new NoWeapon);
$king->useWeapon();
$king->setWeapon(new Gun);
$king->useWeapon();
$king->shout();
$prince = new Prince();
$prince->shout();
$prince->setWeapon(new Sword);
 