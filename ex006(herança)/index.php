<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php 
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';

        // $p1 = new Pessoa();
        // $v1 = new Visitante();
        // $v1->fazerAniversario();

        $a1 = new Aluno();
        $a1->fazerAniversario();
        $a1->pagarMensalidade();
        
        $b1 = new Bolsista();
        $b1->pagarMensalidade();
        $b1->renovarBolsa();
        $b1->fazerAniversario();
    ?>
</body>
</html>