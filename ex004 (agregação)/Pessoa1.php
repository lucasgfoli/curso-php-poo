<?php 
    class Pessoa1 {
        private $nome;
        private $idade;
        private $sexo;

        public function __construct($no, $id, $se)
        {
            $this->nome = $no;
            $this->idade = 0.1;
            if ( $id > 0.1)
                $this->idade = $id;
            $this->sexo = $se;
        }

        public function fazerAniversario()
        {
            $this->idade ++;
            echo "Parabéns!";
        }

        public function getNome()
        {
            return $this->nome;
        }
    }
?>