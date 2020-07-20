from payment import Payment

class Paypal(Payment):
    idPay = int
    email = str

    def __init__(self, id, idPay, email):
        super.__init__(id)
        self.idPay = idPay
        self.email = email
