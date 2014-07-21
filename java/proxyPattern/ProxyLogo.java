package proxyPattern;

public class ProxyLogo implements Logo {
	private String logo;
	private Logo display;

	public ProxyLogo(String logo) {
		this.logo = logo;
	}

	@Override
	public void displayLogo() {
		if (display == null)
			display = new RealLogo(logo);
		display.displayLogo();

	}

}
