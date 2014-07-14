package facadePattern;

public class ClientData {

	public void setPassengerDetails(String[] data) {
		System.out.println("Passenger: " + data[0]);
	}

	public void setFlightDetails(String[] data) {
		System.out.println("Flight: " + data[1]);
	}

	public void setBaggageDetails(String[] data) {
		System.out.println("Baggage: " + data[2]);
	}
}
