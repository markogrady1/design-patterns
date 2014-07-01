package strategyPattern;

abstract class Character {
	Weapon weapon;

	public void setWeapon(Weapon weapon) {
		this.weapon = weapon;
	}

	public void useWeapon() {
		this.weapon.action();
	}
}
