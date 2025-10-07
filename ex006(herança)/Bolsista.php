<?php 

    require_once 'Aluno.php';

    final class Bolsista extends Aluno {
        private $bolsa;

        public function renovarBolsa()
        {
            echo "Bolsa renovada";
        }

        public function pagarMensalidade()
        {
             echo $this->nome . "é bolsista! Então paga com desconto!";
        }
        
        // Getter e setter para bolsa
        public function getBolsa()
        {
            return $this->bolsa;
        }

        public function setBolsa($bolsa)
        {
            $this->bolsa = $bolsa;
        }
    }
?>