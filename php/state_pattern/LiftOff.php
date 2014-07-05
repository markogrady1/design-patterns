<?php 

class LiftOff implements State{
public $missionControl;

public function __construct(MissionControl $missionControl){
		$this->missionControl = $missionControl;
	}

	public function checkAllSystems(){
		echo "Systems have already been cleared.<br>";
	}
	public function startPowerUnits(){
		echo "Power units have been started.<br>";
	}
	public function retractArms(){
		echo "Arms and fuel connections have been retracted.<br>";
		
	}
	public function shutDown(){
		echo "Permission has not been given.<br>";
	}
	public function rocketBooster(){
		echo "We have lift off.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getLiftOffStatus());
	}
}