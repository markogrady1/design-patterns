<?php  namespace php\observerPattern;
/*
|===========================================================
|
|-----------------------------------------------------------
|	The Administrator is the 'Subject' in this pattern
|-----------------------------------------------------------
|
|===========================================================
|
*/
interface Administrator {
		
	/**
	 * Register user for conference
	 * 
	 * @param User $user
	 * @return void
	 */
	public function registerUser(User $user);
		
	/**
	 * Remove user from conference list
	 * 
	 * @param User $user
	 * @return void
	 */
	public function removeUser(User $user);
		
	/**
	 * Notify the user of any changes 
	 * 
	 * @param User $user
	 * @return void
	 */
	public function notifyUser();
}
