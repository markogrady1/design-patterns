package statePattern;

public class FireRockets implements State {
	private MissionControl missionControl;
	
	public FireRockets(MissionControl missionControl) {
		this.missionControl = missionControl;
	}

	@Override
	public void checkAllSystems() {
		System.out.println("Systems have been cleared");
	}

	@Override
	public void startPowerUnits() {
		System.out.println("Power units have been started");

	}

	@Override
	public void retractArms() {
		System.out.println("Arms and fuel connections have been retracted.");
		this.missionControl.setState(this.missionControl.getRocketBooster());
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
