package factoryPattern;
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
public class CookieFactory {

	public Cookie createCookie(String type) {
		Cookie cookie = null;
		if (type == "choc") {
			cookie = new Choc();
		}
		if (type == "hazlenut") {
			cookie = new Hazlenut();
		}
		if (type == "double-choc") {
			cookie = new DoubleChoc();
		}
		return cookie;
	}
}
