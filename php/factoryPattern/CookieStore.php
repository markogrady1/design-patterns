<?php namespace php\factoryPattern;
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
class CookieStore {
	
	/**
	 * Instance of CookieFactory
	 * 
	 * @var CookieFactory $factory
	 */
	private $factory = null;
		
	/**
	 * Instance of Cookie
	 * 
	 * @var Cookie $cookie
	 */
	private $cookie = null;
	
	/**
	 * Assign instance of CookieFactory to variable
	 * 
	 * @param CookieFactory $factory
	 */
	public function __construct(CookieFactory $factory) {
		$this->factory = $factory;
	}
		
	/**
	 * Create type of cookie
	 * 
	 * @param string $type
	 * @param Cookie $cookie
	 * @return Cookie $cookie
	 */
	public function takeOrder($type, Cookie $cookie) {
		$this->cookie = $cookie;
		$this->cookie = $this->factory->createCookie($type);
		$this->cookie->mix();
		$this->cookie->bake();
		$this->cookie->box();
		
		return $this->cookie;
	}
}
