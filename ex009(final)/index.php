<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <pre>
    <?php 
    require_once 'AcoesEmVideo.php';
    require_once 'Video.php';
    require_once 'Visualisacao.php';
    
    $v[0] = new Video("Curso 1 PHP");
    $v[1] = new Video("POO - Primeiro Módulo em PHP");
    $v[2] = new Video("PHP para iniciantes");
    
    $g[0] = new Gafanhoto("Jubileu", 11, "M", "jubis");
    $g[1] = new Gafanhoto("Ana", 19, "F", "anaana");
    
    $vis[0] = new Visualizacao($g[0], $v[0]);
    $vis[1] = new Visualizacao($g[1], $v[1]);

    $vis[0]->avaliar();
    $vis[1]->avaliarNota(8);
    $vis[1]->avaliarPorcentagem(90);
    
    print_r($v[0]);
    print_r($v[1]);
    print_r($v[2]);
    
    print_r($g[0]);
    print_r($g[1]);
    
    ?>
    </pre>
</body>
</html>