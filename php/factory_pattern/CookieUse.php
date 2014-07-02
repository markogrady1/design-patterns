<?php 
include_once('autoload.php');
$cf = new CookieFactory();
$cookie = new Cookie();
$cs = new CookieStore($cf);
$cs->takeOrder('double-choc',$cookie);
$cs->takeOrder('choc',$cookie);
$cs->takeOrder('hazlenut',$cookie);