<?php 
include_once 'Laptop.php';
include_once 'Keyboard.php';
include_once 'Mouse.php';

$laptop = new Laptop;
$money = $laptop->cost();
//echo $laptop->getDescription().'  '.$laptop->cost();
$keyboard = new Keyboard($laptop);
echo $keyboard->getDescription();
echo $laptop->cost();
$mouse = new Mouse($laptop);
echo $mouse->getDescription();
echo $mouse->cost();