package singletonPattern;

public class VoucherCheck {
	public VoucherCheck(String id) {
		if (id == "AZ568DH")
			signIn();
		else
			System.out.println("Id:"+id+" was not recognized");
	}

	private void signIn() {
		VoucherProvider voucher = VoucherProvider.getInstance();
		System.out.println("Voucher sent");
	}
}
