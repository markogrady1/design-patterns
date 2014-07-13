<?php 
namespace php\facadePattern;

include 'Statistics.php';
include 'DataFacade.php';
$data = new DataFacade();
$stats = new Statistics($data);
$stats->retrieveData('319');
