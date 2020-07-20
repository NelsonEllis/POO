<?php
class Car {
    public $id;
    public $license;
    public $driver;
    public $passenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar()
    {
        echo "Licencia: $this->license \n Driver:\n ".$this->driver->name .$this->driver->name . " Documento: ".$this->driver->document;
    }
}