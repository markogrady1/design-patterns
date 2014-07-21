package proxyPattern;

public class RealLogo implements Logo {
	private String logo;

	public RealLogo(String logo) {
		this.logo = logo;
		System.out.println("Logo " + this.logo + " is loading......");
	}

	@Override
	public void displayLogo() {
		System.out.println("Logo: " + this.logo);
	}

}
