<?php 
    require_once 'Pessoa.php';

    class Aluno extends Pessoa {
        protected $matricula;
        protected $curso;

        public function pagarMensalidade()
        {
            echo "<p>Pagando mensalidade do aluno" . $this->nome;
        }

        // Getters e setters
        public function getMatricula()
        {
            return $this->matricula;
        }

        public function setMatricula($matricula)
        {
            $this->matricula = $matricula;
        }

        public function getCurso()
        {
            return $this->curso;
        }

        public function setCurso($curso)
        {
            $this->curso = $curso;
        }
    }
?>