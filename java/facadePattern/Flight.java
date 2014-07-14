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
public class Flight {
	private String id;
	private String flightNo = "AM676798";
	private String airLine = "Java-Air";
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
