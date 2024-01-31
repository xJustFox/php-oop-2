<?php 
    // CLASSE GENITORE
    class Product{
        public $brand;
        public $name;
        public $img;
        public $price;
        public $description;
        public $category;

        public function __construct($_brand,$_name,$_img,$_price,$_description,Category $_category){
            $this->brand = $_brand;
            $this->name = $_name;
            $this->img = $_img;
            $this->price = $_price;
            $this->description = $_description;
            $this->category = $_category;
        }
    }

    //CLASSE ANIMALI
    class Category{
        public $animal;

        public function __construct($_animal){
            $this->animal = $_animal;
        }
    }
?>