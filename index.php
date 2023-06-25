<?php 


require_once "IBarcode.php";
require_once "BarcodeTrait.php";
class Product implements IBarCode{
    private $name;
    use BarcodeTrait;
    private $manufacture;
    
    public function __construct($name, $barCode, $manufacture)
    {
        $this->name = $name;
        $this->barCode = $barCode;
        $this->manufacture = $manufacture;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
 
    public function setBarCode($barCode){
        $this->barCode = $barCode;
    }
    public function getManufacture(){
        return $this->manufacture;
    }
    public function setManufacture($manufacture){
        $this->manufacture = $manufacture;
    }
}


?>