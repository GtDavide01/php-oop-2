<?php
require_once __DIR__ . "/Prodotto.php";
class Cibo extends Prodotto
{
    public $weight;
    public $description;
    public $type;
    public function __construct(String $name, Float $price, String $image, Categoria $category, Float $weight,  String $type, String $description = "")
    {
        parent::__construct($name, $price, $image, $category);
        $this->weight = $weight;
        $this->type = $type;
        $this->description = $description;
    }
}
