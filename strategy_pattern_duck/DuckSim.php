<?php 


require_once 'Mallard.php';
require_once 'NoFly.php';
require_once 'Squeak.php';

$mallard = new Mallard();
$mallard->performQuack();
$mallard->performFly();
$mallard->setQuackBehavior(new Squeak);
$mallard->performQuack();
$mallard->setFlyBehavior(new Nofly);
$mallard->performFly();
$mallard->setFlyBehavior(new RocketFly);
$mallard->performFly();