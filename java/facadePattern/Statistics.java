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
