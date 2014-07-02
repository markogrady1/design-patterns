package observerPattern;

public class conferenceDriver {
	public static void main(String[] args) {
		EventsOffice eo = new EventsOffice();
		MagazineUser mg = new MagazineUser(eo);
		eo.setNewConferenceDetails("London", 200, "Albert Hall");
		eo.setNewConferenceDetails("New York", 200, "Madison Square Garden");
	}
}
