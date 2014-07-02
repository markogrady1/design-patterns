<?php 
include_once('User.php');

interface Administrator{
	public function registerUser(User $user);
	public function removeUser(User $user);
	public function notifyUser();
}