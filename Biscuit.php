<?php

require_once "index.php";

    class Biscuit extends Product{

       public function __construct()
        {
           parent::__construct("Biscuit", "biscuit barcode", "biscuit manufacture");

        }

        public static function getBarCode()
        {
            return "B" . parent::getBarCode() ;
        }
    }






?>