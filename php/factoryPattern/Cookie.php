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
class Cookie{

protected $name;
protected $topping;
protected $flavour;

	public function mix(){
		echo 'mix in the ' . $this->flavour . '<br>';
	}
	public function bake(){
		echo 'Baking and sprinkle ' . $this->topping . ' on top<br>';
	}
	public function box(){
		echo 'Your ' . $this->name . ' cookie is ready<br>';
	}
}
