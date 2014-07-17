package statePattern;

public interface State {
	public void checkAllSystems();

	public void startPowerUnits();

	public void retractArms();

	public void shutDown();

	public void rocketBooster();
}
