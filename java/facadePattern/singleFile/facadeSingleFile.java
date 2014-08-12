package facadePattern;

public class Statistics {
	private DataFacade facade;

	public Statistics(DataFacade facade) {
		this.facade = facade;
	}

	public void getData(String id) {
		ClientData client = new ClientData();
		String[] allData = this.facade.retrieveData(id);
		client.setPassengerDetails(allData);
		client.setFlightDetails(allData);
		client.setBaggageDetails(allData);
	}
}

 /*
|========================================================================
|------------------------------------------------------------------------
|  The values for the instance variables would 
|  usually be obtained from a database
|  However values have been added for the benfit of this example
|------------------------------------------------------------------------
|========================================================================
*/

public class Passenger {
	private String id;
	private String passengerName = "Billy Bob";
	private String passengerAddress = "New York";
	private String passengerAge = "23";

	public Passenger(String id) {
		this.id = id;
	}

	public String getPassengerName() {
		
		return this.passengerName;
	}

	public String getPassengerAddress() {
		
		return this.passengerAddress;
	}

	public String getPassengerAge() {
		
		return this.passengerAge;
	}
}


public class Flight {
	private String id;
	private String flightNo = "AM676798";
	private String airLine = "JavaAir";
	private String departureTime = "12-11-14  10:43";

	public Flight(String id) {
		this.id = id;
	}

	public String getFlightNo() {
		
		return this.flightNo;
	}

	public String getAirline() {
		
		return this.airLine;
	}

	public String getDepartureTime() {
		
		return this.departureTime;
	}
}

public class Baggage {
	private String id;
	private String amount = "4";
	private String totalWeight = "3KG";
	private String allAccountedFor = "true";

	public Baggage(String id) {
		this.id = id;
	}

	public String getAmount() {
		
		return this.amount;
	}

	public String getTotalWeight() {
		
		return this.totalWeight;
	}

	public String getAllAccountedFor() {
		
		return this.allAccountedFor;
	}
}

public class DataFacade {
	private String[] data = new String[3];

	public DataFacade() {

	}

	public String[] retrieveData(String id) {
		this.data[0] = getPassengerDetails(id);
		this.data[1] = getFlightDetails(id);
		this.data[2] = getBaggageDetails(id);
		
		return data;
	}

	public String getPassengerDetails(String id) {
		Passenger passenger = new Passenger(id);
		String passengerData = passenger.getPassengerName();
		passengerData += ", " + passenger.getPassengerAddress();
		passengerData += ", " + passenger.getPassengerAge();
		
		return passengerData;
	}

	public String getFlightDetails(String id) {
		Flight flight = new Flight(id);
		String flightData = flight.getFlightNo();
		flightData += ", " + flight.getAirline();
		flightData += ", " + flight.getDepartureTime();
		
		return flightData;
	}

	public String getBaggageDetails(String id) {
		Baggage baggage = new Baggage(id);
		String baggageData = baggage.getAmount();
		baggageData += ", " + baggage.getTotalWeight();
		baggageData += ", " + baggage.getAllAccountedFor();
		
		return baggageData;
	}
}


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


public class FacadeDriver {
	public static void main (String[] args){
		DataFacade data = new DataFacade();
		Statistics statistics = new Statistics(data);
		statistics.getData("WX4983489");
	}
}
