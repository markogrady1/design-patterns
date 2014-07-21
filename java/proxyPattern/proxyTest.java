package proxyPattern;

public class proxyTest {
	public static void main(String[] args) {
		ProxyLogo logo1 = new ProxyLogo("StoreLogo.png");
		ProxyLogo logo2 = new ProxyLogo("webLogo.png");
		logo1.displayLogo();
		logo2.displayLogo();
	}
}
