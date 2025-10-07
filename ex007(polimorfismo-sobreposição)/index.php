<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    require_once 'Animal.php';
    require_once 'Ave.php';
    require_once 'Arara.php';
    require_once 'Mamifero.php';
    require_once 'Cachorro1.php';
    require_once 'Canguru.php';
    require_once 'Reptil.php';
    require_once 'Cobra.php';
    require_once 'Tartaruga.php';
    require_once 'Peixe.php';
    require_once 'Goldfish.php';

    // instâncias de todas as classes da pasta (como você fez)
    $m = new Mamifero();
    $ave = new Ave();
    $arara = new Arara();
    $cachorro = new Cachorro1();
    $canguru = new Canguru();
    $reptil = new Reptil();
    $cobra = new Cobra();
    $tartaruga = new Tartaruga();
    $peixe = new Peixe();
    $goldfish = new Goldfish();

    // chamar métodos
    // Ave / Arara
    $ave->locomover();
    $ave->emitirSom();
    $ave->alimentar();
    $ave->fazerNinho();

    $arara->locomover();
    $arara->emitirSom();
    $arara->alimentar();
    $arara->fazerNinho();

    // Mamíferos
    $m->locomover();
    $m->emitirSom();
    $m->alimentar();

    $cachorro->locomover();
    $cachorro->emitirSom();
    $cachorro->alimentar();
    $cachorro->enterrarOsso();
    $cachorro->abanarRabo();

    $canguru->locomover();
    $canguru->emitirSom();
    $canguru->alimentar();
    $canguru->usarBolsa();

    // Répteis
    $reptil->locomover();
    $reptil->emitirSom();
    $reptil->alimentar();

    $cobra->locomover();
    $cobra->emitirSom();
    $cobra->alimentar();

    $tartaruga->locomover();
    $tartaruga->emitirSom();
    $tartaruga->alimentar();

    // Peixes
    $peixe->locomover();
    $peixe->emitirSom();
    $peixe->alimentar();
    $peixe->soltarBolha();

    $goldfish->locomover();
    $goldfish->emitirSom();
    $goldfish->alimentar();
    $goldfish->soltarBolha();
    ?>
</body>

</html>