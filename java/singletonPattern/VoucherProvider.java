package singletonPattern;

public class VoucherProvider {
	private static VoucherProvider instance = null;

	private VoucherProvider() {
		// Exists to stop instantiation.
	}

	public static VoucherProvider getInstance() {
		if (instance == null) {
			instance = new VoucherProvider();
		}
		return instance;
	}
}
