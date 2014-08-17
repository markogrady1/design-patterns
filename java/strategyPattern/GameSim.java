package strategyPattern;

public class GameSim {

	public static void main(String[] args) {
		King king = new King();
		
		king.setWeapon(new Axe());
		
		king.useWeapon();
		
		king.shout();
		
		Prince prince = new Prince();
		
		prince.setWeapon(new NoWeapon());
		
		prince.useWeapon();
		
		prince.setWeapon(new Bazooka());
		
		prince.useWeapon();
		
		prince.shout();
		
	}
}
