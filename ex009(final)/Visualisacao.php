<?php 
    require_once 'Video.php';
    require_once 'Gafanhoto.php';

    class Visualizacao {
        private $espectador;
        private $filme;

        public function __construct($espectador, $filme)
        {
            $this->espectador = $espectador;
            $this->filme = $filme;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() + 1);
        }

        public function avaliar()
        {
            $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($nota)
        {
            if ( $nota >= 0)
                $this->filme->setAvaliacao($nota);
            else 
                $this->filme->setAvaliacao(0);
        }

        public function avaliarPorcentagem($porcentagem)
        {
            $nota = 0;

            if ( $porcentagem <= 20 )
                $nota = 3;
            else if ( $porcentagem <= 50)
                $nota = 5;
            else if ( $porcentagem <= 90)
                $nota = 8;
            else 
                $nota = 10;

            $this->filme->setAvaliacao($nota);
        }

        // getters e setters
        public function getEspectador()
        {
            return $this->espectador;
        }

        public function setEspectador($espectador)
        {
            $this->espectador = $espectador;
        }

        public function getFilme()
        {
            return $this->filme;
        }

        public function setFilme($filme)
        {
            $this->filme = $filme;
        }
    }
?>