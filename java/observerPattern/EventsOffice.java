package observerPattern;
import java.util.ArrayList;
public class EventsOffice implements Administrator {
	String city,venue;
	int price;
	ArrayList<User> observer;
	public EventsOffice(){
		observer = new ArrayList<>();
	}
	public void registerUser(User user) {
		observer.add(user);

	}

	@Override
	public void removeUser(User user) {
		observer.remove(user);

	}

	@Override
	public void notifyUser() {
		for (int i = 0; i < observer.size(); i++) {
			User ob = (User) observer.get(i);
			ob.update(city, price,venue);
		}
	}
	public void sendConferenceDetails(){
		notifyUser();
	}

	public void setNewConferenceDetails(String conferenceCity, int conferencePrice, String conferenceVenue){
		this.city = conferenceCity;
		this.price = conferencePrice;
		this.venue = conferenceVenue;
		sendConferenceDetails();
		displayConferenceDetails();
	}
	public void displayConferenceDetails(){
		System.out.println("Location: "+this.city+"\nPrice: "+price+"\nVenue: "+venue);
	}

}
