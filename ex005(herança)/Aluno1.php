<?php 
    require_once '/Pessoa2.php';

    class Aluno1 extends Pessoa2 {
        private $matricula;
        private $curso;

        public function cancelarMatricula(){
            echo "<p>Matricula cancelada</p>";
        }
    }

?>