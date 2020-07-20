package Java;

    public class Paypal extends Payment{
        Integer idPay;
        String email;

    public Paypal(Integer id, Integer idPay, String email){
        super(id);
        this.idPay = idPay;
        this.email = email;
    }
}