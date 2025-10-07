<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lutador</title>
</head>

<body>
    <pre>

        <?php
        require_once 'Livro.php';
        require_once 'Pessoa1.php';
        
        $p[0] = new Pessoa("Pedro", 22, "M");
        $p[1] = new Pessoa("Maria", 24, "F");

        $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
        $l[1] = new Livro("POO com PHP", "Maria da Silva", 500, $p[1]);
        $l[2] = new Livro("PHP Avançado", "Paula do Santos", 800, $p[1]);

        print_r($l[0]);
        print_r($l[1]);
        print_r($l[2]);

        $l[0]->abrir();
        $l[0]->folhear(80);
        $l[0]->avancarPag();

        $l[0]->detalhes();



        ?>


    </pre>

</body>

</html>