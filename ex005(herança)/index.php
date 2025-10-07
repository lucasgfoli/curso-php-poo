<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <title>Lutador</title>
</head>
<body>
    <?php 

    require_once '/Pessoa2.php';
    require_once '/Aluno1.php';
    require_once '/Professor.php';
    require_once '/Funcionario.php';

        $p1 = new Pessoa();
        $p2 = new Aluno1();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->fazerAniversario();
        $p2->fazerAniversario();
        $p3->fazerAniversario();
        $p4->fazerAniversario();


        $p2->cancelarMatricula();
        $p3->receberAumento(550.2);
        $p4->mudarTrabalho();

    ?>
</body>
</html>