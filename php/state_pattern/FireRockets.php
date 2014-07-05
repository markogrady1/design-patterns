<?php 

class FireRockets implements State{
public $missionControl;
public function __construct(MissionControl $missionControl){
		$this->missionControl = $missionControl;
	}

	public function checkAllSystems(){
		echo "Systems have already been cleared.<br>";
	}
	public function startPowerUnits(){
		
	}
	public function retractArms(){
		echo "Arms and fuel connections have been retracted.<br>";
		$this->missionControl->setState($this->missionControl->getRocketBooster());
	}
	public function shutDown(){
		echo "Permission has not been given.<br>";
	}
	public function rocketBooster(){
		echo "power units have not been started.<br>";
	}
}

