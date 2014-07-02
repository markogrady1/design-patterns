package observerPattern;
/*
|=====================================================================
|
|----------------------------------------------------------------------
|	The ApplicationUser is the 'concrete-observer' in this pattern
|----------------------------------------------------------------------
|
|======================================================================
|
*/
public class ApplicationUser implements User {

	String city;
	int price;
	String venue;
	Administrator data;

	public ApplicationUser(Administrator admin) {
		this.data = admin;
		this.data.registerUser(this);
	}

	public void update(String city, int price, String venue) {

	}

}
