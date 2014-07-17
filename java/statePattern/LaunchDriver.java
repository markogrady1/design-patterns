package statePattern;

public class LaunchDriver {
	public static void main(String[] args) {
		MissionControl missionControl = new MissionControl(60);
		missionControl.checkAllSystems();
		missionControl.startPowerUnits();
		missionControl.retractArms();
		missionControl.rocketBooster();
	}
}
