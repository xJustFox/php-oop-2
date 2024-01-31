<?php
    require_once __DIR__.'/Product.php';

    class Accessories extends Product{

        public function __construct($_brand,$_name,$_img,$_price,$_description,$_category){

            parent::__construct($_brand,$_name,$_img,$_price,$_description,$_category);
        }
    }
?>