<?php 
include_once 'State.php';
class SystemsGo implements State{
	public $missionControl;

	public function __construct(MissionControl $missionControl){
		$this->missionControl = $missionControl;
	}

	public function checkAllSystems(){
		echo "All system are ready<br>";
		$this->missionControl->setState($this->missionControl->getStartPowerUnits());
	}
	public function startPowerUnits(){
		echo "systems are not ready yet";
	}
	public function retractArms(){
		echo "systems are not ready yet";
	}
	public function shutDown(){
		echo "Order not given";
	}
	public function rocketBooster(){
		echo "systems are not ready yet";
	}
}