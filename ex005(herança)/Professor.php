<?php
require_once '/Pessoa2.php';

class Professor extends Pessoa2
{
    private $especialidade;
    private $salario;

    public function receberAumento($aumento)
    {
        $this->salario += $aumento;
    }
}
