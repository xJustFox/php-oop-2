<?php 
    require_once __DIR__.'/Product.php';
    
    class Toy extends Product{
        public $material;

        public function __construct($_brand,$_name,$_img,$_price,$_description,$_category,$_material){

            parent::__construct($_brand,$_name,$_img,$_price,$_description,$_category);
            $this->material = $_material;
        }
    }
?>