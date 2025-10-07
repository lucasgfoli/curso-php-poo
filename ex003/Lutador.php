<?php
class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe); //
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    function apresentar() {
        echo "<p>===============================================================</p>";
        echo "<p>Lutador:</p>" . $this->getNome();
        echo "<p>Origem:</p>" . $this->getNacionalidade();
        echo $this->getIdade() . "<p>Anos</p>";
        echo $this->getAltura() . "<p>m de altura</p>";
        echo "<p>Pesando: </p>" . $this->getPeso() . "<p>Kg</p>";
        echo "<p>Ganhou:</p>" . $this->getVitorias();
        echo "<p>Perdeu:</p>" . $this->getDerrotas();
        echo "<p>Empatou:</p>" . $this->getEmpates();
    }

    function status() {
        echo "<p>===============================================================</p>";
        echo $this->getNome();
        echo "<p>É um peso</p>" . $this->getCategoria();
        echo $this->getVitorias() . "<p>Vitórias</p>";
        echo $this->getDerrotas() . "<p>Derrotas</p>";
        echo $this->getEmpates() . "<p>Empates</p>";
    }

    function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    // Getters

    function getNome()
    {
        return $this->nome;
    }

    function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    function getIdade()
    {
        return $this->idade;
    }

    function getAltura()
    {
        return $this->altura;
    }

    function getPeso()
    {
        return $this->peso;
    }

    function getCategoria()
    {
        return $this->categoria;
    }
    function getVitorias()
    {
        return $this->vitorias;
    }
    function getDerrotas()
    {
        return $this->derrotas;
    }
    function getEmpates()
    {
        return $this->empates;
    }

    // Setters
    function setNome($nome)
    {
        $this->nome = $nome;
    }
    function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }
    function setIdade($idade)
    {
        $this->idade = $idade;
    }
    function setAltura($altura)
    {
        $this->altura = $altura;
    }
    function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }
    function setCategoria()
    {
        if ( $this->peso <= 52.2 )
        {
            $this->categoria = "Inválido";
        }
        elseif ( $this->peso <= 70.3 )
        {
            $this->categoria = "Leve";
        }
        elseif ( $this->peso <= 83.9 )
        {
            $this->categoria = "Médio";
        }
        elseif ( $this->peso <= 120.2)
        {
            $this->categoria = "Pesado";
        }
        else 
        {
            $this->categoria = "Inválido!";
        }
    }
    function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }
    function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }
    function setEmpates($empates)
    {
        $this->empates = $empates;
    }
}
