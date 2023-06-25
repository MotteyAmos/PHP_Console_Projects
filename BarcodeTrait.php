<?php

trait BarcodeTrait{
    private $barCode;
    public static function getBarCode(){
        return BarCodeTrait::$barCode;
    }
}




?>