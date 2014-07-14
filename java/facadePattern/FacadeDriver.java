package facadePattern;

public class FacadeDriver {
	public static void main (String[] args){
		DataFacade data = new DataFacade();
		Statistics statistics = new Statistics(data);
		statistics.getData("WX4983489");
	}
}
