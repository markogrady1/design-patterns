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
/*
|========================================================================
|------------------------------------------------------------------------
|	Some methods have not been added for convinience
|	as it is only an example to display the basics.
| 
|------------------------------------------------------------------------
|========================================================================
*/
