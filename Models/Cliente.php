<?php
require_once __DIR__ . "/Carrello.php";
class Cliente
{
    public $carrello;

    function __construct(public $name, public $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}
