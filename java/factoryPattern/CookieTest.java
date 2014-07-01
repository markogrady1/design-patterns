package factoryPattern;

public class CookieTest {
	public static void main(String args[]) {
		CookieFactory cf = new CookieFactory();
		CookieShop cs = new CookieShop(cf);
		cs.takeOrder("double-choc");
	}
}
