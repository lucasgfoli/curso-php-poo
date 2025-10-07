<?php
class Caneta
{
    var $modelo; // Porquê var?
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar()
    {
        if ($this->tampada) {
            echo "ERRO Não posso rabiscar ";
        } else {
            echo "estou rabiscando...";
        }

    }

    function tampar() {
        $this->tampada = true;
    }

    function destampar() {
        $this->tampada = false;
    }

        // Getters
        function getModelo() {
            return $this->modelo;
        }
        function getCor() {
            return $this->cor;
        }
        function getPonta() {
            return $this->ponta;
        }
        function getCarga() {
            return $this->carga;
        }
        function getTampada() {
            return $this->tampada;
        }

        // Setters
        function setModelo($modelo) {
            $this->modelo = $modelo;
        }
        function setCor($cor) {
            $this->cor = $cor;
        }
        function setPonta($ponta) {
            $this->ponta = $ponta;
        }
        function setCarga($carga) {
            $this->carga = $carga;
        }
        function setTampada($tampada) {
            $this->tampada = $tampada;
        }
}
