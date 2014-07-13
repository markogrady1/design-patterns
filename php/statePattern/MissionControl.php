<?php 

class MissionControl{
	public $state;
	public $systemsGo;
	public $mainEngine;
	public $fireRockets;
	public $missionAbort;
	public $liftOff ;

	public function __construct($tMinus){
	$this->systemsGo = new SystemsGo($this);
	$this->mainEngine = new MainEngine($this);
	$this->fireRockets = new FireRockets($this);
	$this->missionAbort = new MissionAbort($this);
	$this->liftOff = new LiftOff($this);
		if($tMinus>=60){
			echo 'Systems prepare for checks<br>';
			$this->state = new SystemsGo($this);
		}
		if($tMinus<60){
			echo 'Incorrect procedure. Mission abort.<br>';
			$this->state = new MissionAbort($this);
			$this->state->shutDown();
		}
	}

	public function setState(State $state){
		$this->state = $state;
	}

	public function liftOffHandOver($orbitState){
		echo $orbitState;
	}

	public function checkAllSystems(){
		$this->state->checkAllSystems();
	}

	public function startPowerUnits(){
		$this->state->startPowerUnits();
	}

	public function retractArms(){
		$this->state->retractArms();
	}

	public function rocketBooster(){
		$this->state->rocketBooster();
	}
public function shutDown(){
		$this->state->shutDown();
	}

	public function getStartPowerUnits(){
		return $this->mainEngine;
	}
	public function getRetractArms(){
		return $this->fireRockets;
	}

	public function getRocketBooster(){
		return $this->liftOff;
	}
	public function getAbortProcedure(){
		return "All systems are shutting down and fuel is being drained.<br>";
	}
	public function getLiftOffStatus(){
		return "We have a successful lift-Off.<br>";
	}

}

