<?php 
include_once('autoload.php');

$cookie = new Cookie();
$cs = new CookieStore(new CookieFactory());
$cs->takeOrder('double-choc',$cookie);
$cs->takeOrder('choc',$cookie);
$cs->takeOrder('hazlenut',$cookie);