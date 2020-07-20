<?php
require_once('payment.php');
Class Cash extends payment {
    public $idCash;

    public function __construct($id, $idCash){
        parent::__construct($id);
        $this->idCash = $idCash;
    }
}