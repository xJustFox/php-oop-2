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

    // CLASSI FIGLIE
    class Food extends Product{
        public $amount;
        public $category;

        public function __construct($_name,$_img,$_price,$_description,Category $_category,$_amount){

            parent::__construct($_name,$_img, $_price, $_description);
            $this->amount = $_amount;
            $this->category = $_category;
        }
    }

    class Toy extends Product{
        public $material;
        public $category;

        public function __construct($_name,$_img, $_price,$_description,Category $_category,$_material){

            parent::__construct($_name,$_img, $_price, $_description);
            $this->material = $_material;
            $this->category = $_category;
        }
    }

    class Accessories extends Product{
        public $category;

        public function __construct($_name,$_img,$_price,$_description,Category $_category){

            parent::__construct($_name,$_img, $_price,$_description);
            $this->category = $_category;
        }
    }

    $dog = new Category('Cane');
    $cat = new Category('Gatto');
    $bird = new Category('Uccelli');
    $fish = new Category('Pesci');
    
?>