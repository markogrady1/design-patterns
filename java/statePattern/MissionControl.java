package statePattern;

public class MissionControl {
	private State state;
	private State systemsGo;
	private State mainEngine;
	private State fireRockets;
	private State missionAbort;
	private State liftOff;

	public MissionControl(int tMinus) {
		systemsGo = new SystemsGo(this);
		mainEngine = new MainEngine(this);
		fireRockets = new FireRockets(this);
		missionAbort = new MissionAbort(this);
		liftOff = new LiftOff(this);
		if (tMinus >= 60) {
			System.out.println("Systems prepare for checks");
			state = new SystemsGo(this);
		}
		if (tMinus < 60) {
			System.out.println("Incorrect procedure. Mission abort.");
			state = new MissionAbort(this);
			state.shutDown();
		}
	}

	public void setState(State state) {
		this.state = state;
	}

	public void liftOffHandOver(String orbitState) {
		System.out.println(orbitState);
	}

	public void checkAllSystems() {
		this.state.checkAllSystems();
	}

	public void startPowerUnits() {
		this.state.startPowerUnits();
	}

	public void retractArms() {
		this.state.retractArms();
	}

	public void rocketBooster() {
		this.state.rocketBooster();
	}

	public void shutDown() {
		this.state.shutDown();
	}

	public State getStartPowerUnits() {
		return this.mainEngine;
	}

	public State getRetractArms() {
		return this.fireRockets;
	}

	public State getRocketBooster() {
		return this.liftOff;
	}

	public State getAbortProcedure() {
		return this.missionAbort;
	}

	public State getLiftOffStatus() {
		return this.systemsGo;
	}

}
