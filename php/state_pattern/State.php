<?php 

interface State {
	public function checkAllSystems();
	public function startPowerUnits();
	public function retractArms();
	public function shutDown();
	public function rocketBooster();
}