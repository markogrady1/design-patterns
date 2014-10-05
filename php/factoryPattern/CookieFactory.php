<?php  namespace php\factoryPattern;
/*
|===========================================================
|
|-----------------------------------------------------------
|	The CookieFactory is the 'Factory' in this pattern
|-----------------------------------------------------------
|
|===========================================================
|
*/
class CookieFactory {
	
	/**
	 * Cookie instance
	 * 
	 * @var Cookie $cookie
	 */
	private $cookie;

	/**
	 * Create new instance of a type of cookie
	 * 
	 * @return Cookie | DoubleChoc | Hazelnut $cookie
	 */
	public function createCookie($type) {
		$this->cookie = new Cookie;
		if($type=='choc') {
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




	
