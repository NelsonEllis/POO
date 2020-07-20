class Paypal extends Payment {
    constructor(id, idPay, email) {
        super(id)
        this.idPay = idPay;
        this.email = email;
    }
}