<?php 

interface State {
	public function checkAllSystems();
	public function startPowerUnits();
	public function retractArms();
	public function shutDown();
	public function rocketBooster();
}

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
		echo "All systems are to cease operations immediatly.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getAbortProcedure());
	}
	public function rocketBooster(){
		echo "systems are not ready yet";
	}
}

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
		echo "All systems are to cease operations immediatly.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getAbortProcedure());
	}
	public function rocketBooster(){
		echo "power units have not been started.<br>";
	}
}


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
		echo "All systems are to cease operations immediatly.<br>";
		$this->missionControl->liftOffHandOver($this->missionControl->getAbortProcedure());
	}
	public function rocketBooster(){
		echo "power units have not been started.<br>";
	}
}


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


$missionControl = new MissionControl(60);
 $missionControl->checkAllSystems();
 $missionControl->startPowerUnits();
 $missionControl->retractArms();
 $missionControl->rocketBooster();
