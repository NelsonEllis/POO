<?php
require_once('payment.php');
Class Paypal extends payment {
    public $idPay;
    public $email;

    public function __construct($id, $idPay, $email){
        parent::__construct($id);
        $this->idPay = $idPay;
        $this->email = $email;
    }
}