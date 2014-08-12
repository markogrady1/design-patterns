<?php 
use php\observerPattern\AdminDesk;
use php\observerPattern\MagazineUser;
use php\observerPattern\ApplicationUser;

include_once('../../autoload.php');

$adminDesk = new AdminDesk();

$magUser = new MagazineUser();

$magUser->userReg($adminDesk);

$appUser = new ApplicationUser();

$appUser->userReg($adminDesk);

$adminDesk->setConferenceDetails('London', 1000, 'Prince Albert Hall');

$adminDesk->setConferenceDetails('New York', 20000, 'New Jersey Hall');

$adminDesk->displayDetails();

$adminDesk->removeUser($magUser);
