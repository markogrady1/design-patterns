package factoryPattern;
/*
|===========================================================
|
|-----------------------------------------------------------
|	The Cookie is the 'product' in this pattern
|-----------------------------------------------------------
|
|===========================================================
|
*/
public class Cookie {
	protected String flavour;
	protected String name;
	protected String topping;
	public Cookie() {

	}

	public void mix() {
		System.out.println("Mixing in the " + flavour);
	}

	public void bake() {
		System.out.println("baking with " + topping + " on top");
	}

	public void box() {
		System.out.println("Your " + name + " is ready now.");
	}
}
