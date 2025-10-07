<?php
class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar()
    {
        if ($this->tampada) {
            echo "ERRO Não posso rabiscar ";
        } else {
            echo "estou rabiscando...";
        }

    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }
}
