<?php 
include_once 'autoload.php';
$missionControl = new MissionControl(60);
 $missionControl->checkAllSystems();
 $missionControl->startPowerUnits();
 $missionControl->retractArms();
 $missionControl->rocketBooster();
