package facadePattern;

public class Statistics {
	
	private DataFacade facade;
	private ClientData client;

	public Statistics(DataFacade facade, ClientData client) {
		this.facade = facade;
		this.client = client;
	}

	public void getData(String id) {
		String[] allData = this.facade.retrieveData(id);
		this.client.setPassengerDetails(allData);
		this.client.setFlightDetails(allData);
		this.client.setBaggageDetails(allData);
	}
}
