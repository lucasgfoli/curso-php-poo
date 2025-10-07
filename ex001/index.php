<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <?php 

        require_once 'Caneta.php'; // Importar um arquivo

        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;

        // var_dump($c1);

        $c1->rabiscar();

    ?>
</body>
</html>