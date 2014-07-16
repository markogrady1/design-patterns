<?php 
use php\strategyPattern\King;
use php\strategyPattern\Axe;
use php\strategyPattern\NoWeapon;
use php\strategyPattern\Gun;
use php\strategyPattern\Prince;
use php\strategyPattern\Sword;
include_once('../../autoload.php');

$king = new King;
$king->shout();
$king->setWeapon(new Axe);
$king->useWeapon();
$king->setWeapon(new NoWeapon);
$king->useWeapon();
$king->setWeapon(new Gun);
$king->useWeapon();
$king->shout();
$prince = new Prince();
$prince->shout();
$prince->setWeapon(new Sword);
