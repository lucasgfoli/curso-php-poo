<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php 
        // PHP NÃO DÁ SUPORTE À SOBREPOSIÇÃO DE SOBRECARGA!!

        require_once 'Cachorro.php';
        
        $c1 = new Cachorro();

        $c1->reagirFrase("Olá");
        $c1->reagirFrase("Vai apanhar");
        $c1->reagirFrase("Toma comida!");

        $c1->reagirDono(true);
        $c1->reagirDono(false);

        $c1->reagirHora(11, 45);
        $c1->reagirHora(21, 00);

        $c1->reagirIdadePeso(2, 12.5);
        $c1->reagirIdadePeso(17, 4.5);

    ?>
</body>
</html>