<?php 

    class Shop{

        public function addProduct(IBarCode $product){
            return $product->getBarcode();
        }
    }

?>