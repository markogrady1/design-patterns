<?php 
include_once 'AdminDesk.php';
include_once 'MagazineUser.php';
include_once 'ApplicationUser.php';

$adminDesk = new AdminDesk();

$magUser = new MagazineUser();
$magUser->userReg($adminDesk);
$appUser = new ApplicationUser();
$appUser->userReg($adminDesk);

$adminDesk->setConferenceDetails('London',1000,'Prince Albert Hall');
$adminDesk->setConferenceDetails('New York',20000,'New Jersey Hall');
$adminDesk->displayDetails();
$adminDesk->removeUser($magUser);