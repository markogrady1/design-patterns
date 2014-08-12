<?php use php\facadePattern;

 include('../../autoload.php');

$stats = new facadePattern\Statistics(new facadePattern\DataFacade());

$stats->retrieveData('319YX');
