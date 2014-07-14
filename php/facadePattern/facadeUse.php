<?php 

include('autoload.php');

$stats = new Statistics(new DataFacade());
$stats->retrieveData('319YX');
