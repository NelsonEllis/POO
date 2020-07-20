class Paypal extends Payment {
    constructor(id, idCash) {
        super(id)
        this.idCash = idCash;
    }
}