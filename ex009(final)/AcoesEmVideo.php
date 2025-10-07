<?php 
    interface AcoesEmVideo { // Usa se interface para garantir que diferentes classes usem o mesmo padrão.
        public function play();
        public function pause(); // Método abstrato
        public function like();
    }
?>