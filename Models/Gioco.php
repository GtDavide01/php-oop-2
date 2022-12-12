<?php
require_once __DIR__ . "/Prodotto.php";
class Gioco  extends Prodotto
{
    public $material;
    public $description;
    public $type;
    public function __construct(String $name, Float $price, String $image, Categoria $category, String $material,  String $type, String $description = "")
    {
        parent::__construct($name, $price, $image, $category);
        $this->material = $material;
        $this->type = $type;
        $this->description = $description;
    }
}
