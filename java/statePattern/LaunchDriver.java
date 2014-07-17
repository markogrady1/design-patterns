package statePattern;

public class LaunchDriver {
	public static void main(String[] args) {
		MissionControl missionControl = new MissionControl(69);
		missionControl.checkAllSystems();
		missionControl.startPowerUnits();
		missionControl.retractArms();
		missionControl.rocketBooster();
	}
}
