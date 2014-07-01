package factoryPattern;
/*
|===========================================================
|
|-----------------------------------------------------------
|	The CookieShop is the 'client' in this pattern
|-----------------------------------------------------------
|
|===========================================================
|
*/
public class CookieShop {
	CookieFactory factory;

	public CookieShop(CookieFactory factory) {
		this.factory = factory;
	}

	public void takeOrder(String type) {
		Cookie cookie;
		cookie = factory.createCookie(type);
		cookie.mix();
		cookie.bake();
		cookie.box();
	}
}
