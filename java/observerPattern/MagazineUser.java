package observerPattern;
/*
|=====================================================================
|
|----------------------------------------------------------------------
|	The MagazineUser is the 'concrete-observer' in this pattern
|----------------------------------------------------------------------
|
|======================================================================
|
*/
public class MagazineUser implements User {

	String city;
	int price;
	String venue;
	Administrator data;

	public MagazineUser(Administrator admin) {
		this.data = admin;
		this.data.registerUser(this);
	}

	public void update(String city, int price, String venue) {
		this.city = city;
		this.price = price;
		this.venue = venue;

	}

}
