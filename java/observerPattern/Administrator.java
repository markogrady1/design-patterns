package observerPattern;
/*
|==============================================================
|
|--------------------------------------------------------------
|	The Administrator is the 'Subject' in this pattern
|--------------------------------------------------------------
|
|==============================================================
|
*/
public interface Administrator {
	User user = null;

	public void registerUser(User user);

	public void removeUser(User user);

	public void notifyUser();

}
