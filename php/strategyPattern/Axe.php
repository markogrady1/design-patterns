<?php namespace php\strategyPattern;

class Axe implements Weapon {
	/**
	 * Action for the Axe weapon
	 * 
	 * @return void
	 */
	public function action() {
		echo 'Swing Swing<br>';
	}
}
