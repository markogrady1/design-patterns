<?php 
/*
|===========================================================
|
|-----------------------------------------------------------
|    The CookieStore.php is the 'Client' in this pattern
|-----------------------------------------------------------
|
|===========================================================
|
*/
class CookieStore{
	private $factory = null;
	public $cookie = null;
	public function __construct(CookieFactory $factory){
		$this->factory=$factory;
	}
	
	public function takeOrder($type, Cookie $cookie){
		$this->cookie= $cookie;
		$this->cookie= $this->factory->createCookie($type);
		$this->cookie->mix();
		$this->cookie->bake();
		$this->cookie->box();
		return $this->cookie;
	}
}
