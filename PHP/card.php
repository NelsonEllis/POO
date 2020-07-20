<?php
require_once('payment.php');
Class Card extends payment {
    public $idCard;
    public $number;
    public $cvv;
    public $date;

    public function __construct($id, $idCard, $number, $cvv, $date){
        parent::__construct($id);
        $this->idCard = $idCard;
        $this->number = $number;
        $this->cvv = $cvv;
        $this->date = $date;
    }
}