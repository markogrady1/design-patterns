<?php  namespace php\statePattern;

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
		echo "All systems are to cease operations immediatly.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getAbortProcedure());
	}
	
	public function rocketBooster(){
		echo "We have lift off.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getLiftOffStatus());
	}
}