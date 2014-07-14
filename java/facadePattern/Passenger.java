package facadePattern;
/*
|========================================================================
|------------------------------------------------------------------------
| The values for the instance variables would 
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
