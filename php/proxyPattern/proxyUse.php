<?php 
use php\proxyPattern\ProxyLogo;

include_once '../../autoload.php';

$logo1 = new ProxyLogo('shopLogo.png');
$logo2 = new ProxyLogo('webLogo.png');
$logo1->displayLogo();
$logo2->displayLogo();