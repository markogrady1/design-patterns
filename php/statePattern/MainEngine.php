<?php  namespace php\statePattern;

class MainEngine implements State {
	
	/**
	 * Mission control instance
	 *
	 * @var MissionControl $missionControl
	 */
	public $missionControl;
		
	/**
	 * Set instance for mission control
	 *
	 * @param MissionControl $missionControl
	 * @return void
	 */
	public function __construct(MissionControl $missionControl) {
		$this->missionControl = $missionControl;
	}
	
	/**
	 * Check all systems are stable and ready to go
	 *
	 * @return void
	 */
	public function checkAllSystems() {
		echo "Systems have already been cleared.<br>";
	}
	
	/**
	 * set state in mission control
	 *
	 * @return void
	 */
	public function startPowerUnits() {
		echo "power units started.<br>";
		$this->missionControl->setState($this->missionControl->getRetractArms());
	}
	
	public function retractArms() {
		echo "Power units have not been started.<br>";
	}
	
	public function shutDown() {
		echo "All systems are to cease operations immediatly.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getAbortProcedure());
	}
	
	public function rocketBooster() {
		echo "power units have not been started.<br>";
	}
}
