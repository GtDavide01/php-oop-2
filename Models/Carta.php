<?php
class Carta
{
    private $number;
    private $cvv;
    private $mese;
    private $anno;

    function __construct($number, $cvv, $mese, $anno)
    {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->mese = $mese;
        $this->anno = $anno;
    }

    public function getAnno()
    {
        return $this->anno;
    }

    public function getMese()
    {
        return $this->mese;
    }
}
