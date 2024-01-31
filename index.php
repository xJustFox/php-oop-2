<?php 
    // CLASSE GENITORE
    class Product{
        public $name;
        public $img;
        public $price;
        public $description;

        public function __construct($_name,$_img, $_price, $_description){
            $this->name = $_name;
            $this->img = $_img;
            $this->price = $_price;
            $this->description = $_description;
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