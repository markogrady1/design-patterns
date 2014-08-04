<?php  namespace php\statePattern;

class SystemsGo implements State {
	
	public $missionControl;

	public function __construct(MissionControl $missionControl) {
		$this->missionControl = $missionControl;
	}

	public function checkAllSystems() {
		echo "All system are ready<br>";
		$this->missionControl->setState($this->missionControl->getStartPowerUnits());
	}
	
	public function startPowerUnits() {
		echo "systems are not ready yet";
	}
	
	public function retractArms() {
		echo "systems are not ready yet";
	}
	
	public function shutDown() {
		echo "All systems are to cease operations immediatly.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getAbortProcedure());
	}
	
	public function rocketBooster() {
		echo "systems are not ready yet";
	}
}
