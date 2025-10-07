<?php
require_once 'Animal.php';

class Peixe extends Animal
{
    private $corEscama;

    public function alimentar()
    {
        echo "<p>Comendo Substâncias...</p>";
    }

    public function emitirSom()
    {
        echo "<p>Peixe não faz som...</p>";
    }

    public function locomover()
    {
        echo "<p>Nadando...</p>";
    }

    public function soltarBolha()
    {
        echo "<p>Soltou uma bolha...</p>";
    }
}
