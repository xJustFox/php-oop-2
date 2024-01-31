<?php 
    require_once __DIR__.'/Product.php';

    class Food extends Product{
        public $amount;

        public function __construct($_brand,$_name,$_img,$_price,$_description,$_category,$_amount){

            parent::__construct($_brand,$_name,$_img,$_price,$_description,$_category);
            $this->amount = $_amount;
        }
    }
?>