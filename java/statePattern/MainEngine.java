package statePattern;

public class MainEngine implements State {
	private MissionControl missionControl;

	public MainEngine(MissionControl missionControl) {
		this.missionControl = missionControl;
	}

	@Override
	public void checkAllSystems() {
		System.out.println("Systems have been cleared");
	}

	@Override
	public void startPowerUnits() {
		System.out.println("Power units have been started");
		this.missionControl.setState(this.missionControl.getRetractArms());
	}

	@Override
	public void retractArms() {
		System.out.println("Arms and fuel connections have been retracted.");

	}

	@Override
	public void shutDown() {
		System.out.println("All systems are to cease operations immediatly");
		this.missionControl.setState(this.missionControl.getAbortProcedure());
	}

	@Override
	public void rocketBooster() {
		System.out.println("Power units have not been started.");

	}

}
