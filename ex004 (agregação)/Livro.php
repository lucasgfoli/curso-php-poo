<?php
require_once 'Pessoa1.php';
require_once 'Publicacao.php';

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($ti, $au, $tp, $le)
    {
        $this->titulo = $ti;
        $this->autor = $au;
        $this->totalPaginas = $tp;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $le;
    }

    public function detalhes()
    {
        echo "<p>Detalhes do livro:</p>";
        echo "<p>Titulo do livro: </p>" . $this->titulo;
        echo "<p>Autor do livro: </p>" . $this->autor;
        echo "<p>Total de páginas do livro: </p>" . $this->totalPaginas . " Atual: " . $this->pagAtual;
        echo "<p>Sendo lido por:</p>" . $this->leitor->getNome();
    }

    function abrir()
    {
        $this->aberto = true;
    }

    function fechar()
    {
        $this->aberto = false;
    }

    function folhear($pagina)
    {
        if ($pagina > $this->totalPaginas)
            $this->pagAtual = 0;
        else
            $this->pagAtual = $pagina;
    }

    function avancarPag()
    {
        if ($this->pagAtual == $this->totalPaginas || ($this->pagAtual + 1) > $this->totalPaginas) {
            echo "Não é possível avançar página";
            $this->pagAtual == $this->totalPaginas;
        }
        
        $this->pagAtual++;
    }

    function voltarPag()
    {
        if ($this->pagAtual = 0)
            echo "Não é possível voltar página.";
        else
            $this->pagAtual--;
    }
}
