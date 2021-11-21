//proxy pattern

interface Feed {
    // An interface implemented by both the Proxy and Real Feed
    request(): void
    // A method to implement
}

class RealFeed implements Feed {
    // The actual real object that the proxy is representing

    feedData: number[]

    constructor() {
        // hypothetically enormous amounts of data
        this.feedData = [1, 2, 3]
    }

    request() {
        return this.feedData
    }
}

class ProxyFeed implements Feed {
    // In this case the proxy will act as a cache for
    // `enormous_data` and only populate the enormous_data when it
    // is actually necessary

    feedData: number[]
    realFeed: RealFeed

    constructor() {
        this.feedData = []
        this.realFeed = new RealFeed()
    }
    request() {
        // Using the proxy as a cache, and loading data into it only if
        // it is needed
        if (this.feedData.length === 0) {
            console.log('pulling data from RealFeed')
            this.feedData = this.realFeed.request()
            return this.feedData
        }
        console.log('pulling data from Proxy cache')
        return this.feedData
    }
}

// The Client
const proxyFeed = new ProxyFeed()
// Use the Feed. First time it will load the enormous amounts of data
console.log(proxyFeed.request())
// Use the Feed again, but this time it retrieves it from the local cache
console.log(proxyFeed.request())