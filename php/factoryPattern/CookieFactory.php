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
class CookieFactory{

	private $cookie;

	public function createCookie($type){
		$this->cookie = new Cookie;
		if($type=='choc'){
			$this->cookie = new Choc;
		}

		if($type == 'double-choc'){
			$this->cookie = new DoubleChoc;
		} 

		if($type == 'hazlenut'){
			$this->cookie =new Hazlenut;
		}
		
		return $this->cookie;
	}
}




	
