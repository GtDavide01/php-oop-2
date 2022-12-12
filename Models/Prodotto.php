<?php
require_once __DIR__ . "/Categoria.php";
class Prodotto
{
    public $name;
    public $price;
    public $image;
    public $category;

    public function __construct(String $name, Float $price, String $image, Categoria $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }
}
