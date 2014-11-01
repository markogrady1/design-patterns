<?php namespace php\statePattern;

class FireRockets implements State {
	
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
		echo "Systems have already been cleared.<br>";
	}
	
	/**
 	 * Print  power unit statement
	 *
	 * @return void
	 */
	public function retractArms() {
		echo "Arms and fuel connections have been retracted.<br>";
		$this->missionControl->setState($this->missionControl->getRocketBooster());
	}
	
	/**
 	 * Print shutdown statement
	 *
 	 * @return void
	 */
	public function shutDown() {
		echo "All systems are to cease operations immediatly.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getAbortProcedure());
	}
	
	/**
	 * Print negative rocket booster statement
	 *
	 * @return void
	 */
	public function rocketBooster() {
		echo "power units have not been started.<br>";
	}
}

