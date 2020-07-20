package Java;

    public class Card extends Payment{
        Integer idCard;
        Integer number;
        Integer cvv;
        String date;

    public Card(Integer id, Integer idCard, Integer number, Integer cvv, String date){
        super(id);
        this.idCard = idCard;
        this.number = number;
        this.cvv = cvv;
        this.date = date;
    }
}