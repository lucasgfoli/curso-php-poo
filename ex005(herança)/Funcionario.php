<?php

require_once '/Pessoa2.php';

class Funcionario extends Pessoa2
{
    private $setor;
    private $trabalhando;

    public function mudarTrabalho()
    {
        $this->trabalhando = ! $this->trabalhando; // =! inverte o booleano.
    }
}
