<?php
require_once __DIR__ . "/Carrello.php";
require_once __DIR__ . "/Carta.php";
class Cliente
{
    public $carrello;
    private $cartautente;

    function __construct(public $name, public $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function addCarta(Carta $carta)
    {
        $this->cartautente = $carta;
    }

    public function pay($totale)
    {
        if ($this->cartautente->getAnno() > date("Y") || ($this->cartautente->getAnno() === date("Y") && $this->cartautente->getMese() <= ("m"))) {
            return "carta valida";
        } else {
            return "non valida";
        }
    }
}
