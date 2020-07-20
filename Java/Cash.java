package Java;

    public class Cash extends Payment{
        Integer idCash;

    public Cash(Integer id, Integer idCash){
        super(id);
        this.idCash = idCash;
    }
}