<?php 

class MainEngine implements State{
public $missionControl;
public function __construct(MissionControl $missionControl){
		$this->missionControl = $missionControl;
	}

	public function checkAllSystems(){
		echo "Systems have already been cleared.<br>";
	}
	public function startPowerUnits(){
		echo "power units started.<br>";
		$this->missionControl->setState($this->missionControl->getRetractArms());
	}
	public function retractArms(){
		echo "Power units have not been started.<br>";
	}
	public function shutDown(){
		echo "Permission has not been given.<br>";
	}
	public function rocketBooster(){
		echo "power units have not been started.<br>";
	}
}