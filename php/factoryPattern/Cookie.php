<?php namespace php\factoryPattern;
/*
|===========================================================
|
|-----------------------------------------------------------
|	The Cookie is the 'product' in this pattern
|-----------------------------------------------------------
|
|===========================================================
|
*/
class Cookie {
	
	/**
	 * Name of cookie
	 * 
	 * @var string $name
	 */
	protected $name;
		
	/**
	 * Name of cookie topping
	 * 
	 * @var string $topping
	 */
	protected $topping;
		
	/**
	 * Name of flavour
	 * 
	 * @var string $flavour
	 */
	protected $flavour;
	
	/**
	 * Display name of flavour
	 * 
	 * @return void
	 */
	public function mix() {
		echo 'mix in the ' . $this->flavour . '<br>';
	}
		
	/**
	 * Display name of topping
	 * 
	 * @return void
	 */
	public function bake() {
		echo 'Baking and sprinkle ' . $this->topping . ' on top<br>';
	}
		
	/**
	 * Display name of cookie
	 * 
	 * @return void
	 */
	public function box() {
		echo 'Your ' . $this->name . ' cookie is ready<br>';
	}
}
