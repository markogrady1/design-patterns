export interface Product {
    method() : string;
}

interface Toppings {
    choco: string,
    cherry: string,
    plain: string
}

export class Choco implements Product {
    method = () => `you have chosen the choco candy`;
}

export class Cherry implements Product {
    method = () => 'you have chosen the cherry candy';
}

export class Plain implements Product {
    method = () => 'you have chosen the plain candy';
}

export class CandyFactory {
    public static createCandy(topping: Partial<Toppings>) : Product {
        if (topping.choco) {
            return new Choco();
        } else if (topping.cherry) {
            return new Cherry();
        } else {
            return new Plain();
        }
    }
}


export function show() : void {
 const a: Product = CandyFactory.createCandy({choco: 'chocalate sprinkles'});
 const b: Product = CandyFactory.createCandy({cherry: 'cherry drops'});
 const c: Product = CandyFactory.createCandy({plain: ''});

 console.log(a.method());
 console.log(b.method());
 console.log(c.method());
};

show();