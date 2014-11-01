<?php  namespace php\statePattern;

class LiftOff implements State{
			
	/**
	 * Mission control instance
	 * 
	 * @var MissionControl $missionControl
	 */
	public $missionControl;
	
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
	 * print statement for power units
	 * 
	 * @return void
	 */
	public function startPowerUnits() {
		echo "Power units have been started.<br>";
	}
			
	/**
	 * Print fuel connection statement
	 * 
	 * @return void
	 */
	public function retractArms() {
		echo "Arms and fuel connections have been retracted.<br>";
		
	}
	
	/**
	 * Assign abort procedure status
	 * 
	 * @return void
	 */
	public function shutDown() {
		echo "All systems are to cease operations immediatly.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getAbortProcedure());
	}
	
	/**
	 * Assign abort liftoff status
	 * 
	 * @return void
	 */
	public function rocketBooster(){
		echo "We have lift off.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getLiftOffStatus());
	}
}
