<?php 

class MissionAbort implements State{
public $missionControl;

public function __construct(MissionControl $missionControl){
		$this->missionControl = $missionControl;
	}

	public function checkAllSystems(){
		echo "Countdown aborted.<br>";
	}
	public function startPowerUnits(){
		echo "Power units have been shut down.<br>";
	}
	public function retractArms(){
		echo "Fuel drainage in at safe level.<br>";
		
	}
	public function shutDown(){
		echo "All systems are to cease operations immediatly.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getAbortProcedure());
	}
	public function rocketBooster(){
		echo "Launch is totally aborted.<br>";
		
	}
}

