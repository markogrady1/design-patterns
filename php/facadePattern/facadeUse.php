<?php 

include('autoload.php');


$data = new DataFacade();
$stats = new Statistics($data);
$stats->retrieveData('319YX');
