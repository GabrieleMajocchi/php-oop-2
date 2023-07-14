<?php

include_once __DIR__ . '/Animals.php';
include_once __DIR__ . '/Category.php';

class Items{
    public $id;
    public $img;
    public $title;
    public $price;
    public $category;
    public $animals;

    function __construct( Int $id, String $img, String $title,  Int $price, Category $category, Animals $animals){
        $this->id = $id;
        $this->img = $img;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->animals = $animals;
    }
}

?>