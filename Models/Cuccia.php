<?php
require_once __DIR__ . "/Prodotto.php";
class Cuccia extends Prodotto
{
    public $weight;
    public $size;
    public $description;
    public function __construct(String $name, Float $price, String $image, Categoria $category, Float $weight,  String $size, String $description = "")
    {
        parent::__construct($name, $price, $image, $category);
        $this->weight = $weight;
        $this->size = $size;
        $this->description = $description;
    }
}
