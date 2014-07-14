package factoryPattern;

public class CookieTest {
	public static void main(String args[]) {
		CookieShop cs = new CookieShop(new CookieFactory());
		cs.takeOrder("double-choc");
	}
}
