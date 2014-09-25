package facadePattern;

public class FacadeDriver {
	public static void main (String[] args){
		Statistics statistics = new Statistics(new DataFacade(), new ClientData());
		statistics.getData("WX4983489");
	}
}
