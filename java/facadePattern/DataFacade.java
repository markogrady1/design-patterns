package facadePattern;
 
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
