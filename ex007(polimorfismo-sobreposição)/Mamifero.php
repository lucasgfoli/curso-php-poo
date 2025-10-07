<?php 
    require_once 'Animal.php';
    class Mamifero extends Animal {
        private $corPelo;
        
        public function locomover()
        {
            echo "<p>Mamando...</p>";
        }

        public function alimentar()
        {
            echo "<p>Correndo...</p>";
        }

        public function emitirSom()
        {
            echo "<p>Som de mamifero...</p>";
        }

    }
?>