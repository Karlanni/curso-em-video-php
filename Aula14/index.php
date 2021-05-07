<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            
            <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';
            $v[0] = new Video('Aula POO');
            $v[1] = new Video('Aula Java');
            $v[3] = new Video('Aula SQL');
            
            $g[0] = new Gafanhoto('Karlanni', 32, 'F', 'cristina');
            $g[1] = new Gafanhoto('Pedro', 30, 'M', 'henrique');
            
            $view[0] = new Visualizacao($g[0], $v[0]);
            $view[1] = new Visualizacao($g[0], $v[1]);
            
            $view[0]->avaliarPorc(85);
            print_r($view);
            //print_r($v1);
            //print_r($g);
            
            ?>
        </pre>
    </body>
</html>
