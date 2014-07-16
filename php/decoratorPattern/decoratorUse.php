<?php use php\decoratorPattern;

include('../../autoload.php');

$laptop = new decoratorPattern\Laptop;
$money = $laptop->cost();
//echo $laptop->getDescription().'  '.$laptop->cost();
$keyboard = new decoratorPattern\Keyboard($laptop);
echo $keyboard->getDescription();
echo $laptop->cost();
$mouse = new decoratorPattern\Mouse($laptop);
echo $mouse->getDescription();
echo $mouse->cost();