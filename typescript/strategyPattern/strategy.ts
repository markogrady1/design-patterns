
 class Banking {

    private account: Account;

    constructor(account: Account) {
        this.account = account;
    }

    public setAccountType(account: Account) {
        this.account = account;
    }

    public setInterestRates(value: number): void {
        console.log('setting interest rates');
        const result = this.account.addInterest(value);
    }
}

interface Account {
    addInterest(data: number): number;
}

class GoldAccount implements Account {
    public addInterest(data: number): number {
        return data += 100;
    }
}

class SilverAccount implements Account {
    public addInterest(data: number): number {
        return data += 10;
    }
}

const acc = new Banking(new GoldAccount());
console.log('set gold account interest rates');
acc.setInterestRates(20000);

console.log('');

console.log('set silver account interest rates');
acc.setAccountType(new SilverAccount());
acc.setInterestRates(20000);