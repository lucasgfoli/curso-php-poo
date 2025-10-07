<?php
class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    // function __construct($desafiante, $rounds, $aprovada)
    // {
    //     $this->desafiante = $desafiante;
    //     $this->rounds = $rounds;
    //     $this->aprovada = $aprovada;
    // }

    public function marcarLuta( $l1, $l2) {
        if ( $l1->getCategoria() === $l2->getCategoria() && $l1 !== $l2 )
        {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }
        else
        {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
}

    public function lutar() {
        if ( $this->aprovada )
        {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();

            echo "<p>====================================Resultado da luta: ====================================</p>";
            $vencedor = rand(0, 2);

            switch ($vencedor)
            {
                case 0:
                    echo "<p>Empatou!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>" . $this->desafiado->getNome() . " venceu </p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>" . $this->desafiante->getNome() . " venceu </p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }


            }
        else 
        {
            echo "<p>Luta não pode acontecer</p>";
        }
    }

    public function setDesafiado($lutador)
    {
        $this->desafiado = $lutador;
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }
}
