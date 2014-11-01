<?php  namespace php\statePattern;

class MissionAbort implements State {
		
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
		echo "Countdown aborted.<br>";
	}
	
	/**
	 * set state in mission control if permitted
	 * 
	 * @return void
	 */
	public function startPowerUnits() {
		echo "Power units have been shut down.<br>";
	}
			
	/**
	 * Print status
	 * 
	 * @return void
	 */
	public function retractArms() {
		echo "Fuel drainage in at safe level.<br>";
	}
		
	/**
	 * update missionControl if permitted
	 * 
	 * @return void
	 */
	public function shutDown() {
		echo "All systems are to cease operations immediatly.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getAbortProcedure());
	}
			
	/**
	 * Print negative statement
	 * 
	 * @return void
	 */
	public function rocketBooster() {
		echo "Launch is totally aborted.<br>";
		
	}
}

