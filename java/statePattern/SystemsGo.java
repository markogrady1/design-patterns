package statePattern;

public class SystemsGo implements State {
	private MissionControl missionControl;

	public SystemsGo(MissionControl missionControl) {
		this.missionControl = missionControl;
	}

	@Override
	public void checkAllSystems() {
		System.out.println("All systems are ready.");
		this.missionControl.setState(this.missionControl.getStartPowerUnits());
	}

	@Override
	public void startPowerUnits() {
		System.out.println("Systems are not ready yet");

	}

	@Override
	public void retractArms() {
		System.out.println("Systems are not ready yet");

	}

	@Override
	public void shutDown() {
		System.out.println("All systems are to cease operations immediatly.");
		this.missionControl.setState(this.missionControl.getAbortProcedure());
	}

	@Override
	public void rocketBooster() {
		System.out.println("Systems are not ready yet");

	}

}
