<?php
class Carrello
{
    private $items = [];

    public function add(Prodotto $product)
    {
        $this->items[] = $product;
        return $this->items;
    }
    public function getTotal()
    {
        $totale = 0;
        foreach ($this->items as $item) {
            $totale += $item->price;
        }
        return $totale;
    }
}
