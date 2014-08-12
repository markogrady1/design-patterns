<?php 

/*
|===========================================================
|
|-----------------------------------------------------------
|	The Cookie class is the 'product' in this pattern
|-----------------------------------------------------------
|
|===========================================================
|
*/

class Cookie {

protected $name;
protected $topping;
protected $flavour;

	public function mix() {
		echo 'mix in the ' . $this->flavour . '<br>';
	}
	public function bake() {
		echo 'Baking and sprinkle ' . $this->topping . ' on top<br>';
	}
	public function box() {
		echo 'Your ' . $this->name . ' cookie is ready<br>';
	}
}

class Choc extends Cookie {
	
	public function __construct() {
		$this->toppin	= 'Choc chips';
		$this->flavour 	= 'chocolate-flava';
		$this->name 	= 'chocolate';
	}
}

class DoubleChoc extends Cookie {
	
	public function __construct() {
		$this->topping 	= 'Choc-Chunks';
		$this->flavour 	= 'Rich Choccy';
		$this->name 	= 'double choc';
	}
}

class Hazlenut extends Cookie {
	
	public function __construct() {
		$this->topping 	= 'hazlenut-bits';
		$this->flavour 	= 'nutty';
		$this->name 	= 'hazlenut';
	}
}

/*
|===========================================================
|
|-----------------------------------------------------------
|	The CookieFactory class is the 'Factory' in this pattern
|-----------------------------------------------------------
|
|===========================================================
|
*/
class CookieFactory {

	private $cookie;

	public function createCookie($type) {
		$this->cookie = new Cookie;
		if($type == 'choc') {
			$this->cookie = new Choc;
		}

		if($type == 'double-choc') {
			$this->cookie = new DoubleChoc;
		} 

		if($type == 'hazlenut') {
			$this->cookie = new Hazlenut;
		}
		
		return $this->cookie;
	}
}

/*
|===========================================================
|
|-----------------------------------------------------------
|    The CookieStore.php class is the 'Client' in this pattern
|-----------------------------------------------------------
|
|===========================================================
|
*/
class CookieStore {
	private $factory = null;
	private $cookie = null;
	
	public function __construct(CookieFactory $factory){
		$this->factory = $factory;
	}
	
	public function takeOrder($type, Cookie $cookie) {
		$this->cookie = $cookie;
		$this->cookie = $this->factory->createCookie($type);
		$this->cookie->mix();
		$this->cookie->bake();
		$this->cookie->box();
		
		return $this->cookie;
	}
}

/*
|
|----------------------------------
|	Implementation
|----------------------------------
|
*/

$cookie = new Cookie();

$cs = new CookieStore(new CookieFactory());

$cs->takeOrder('double-choc', $cookie);

$cs->takeOrder('choc', $cookie);

$cs->takeOrder('hazlenut', $cookie);

