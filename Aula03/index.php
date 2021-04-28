<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 POO</title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Caneta.php';

            $c1 = new Caneta();
            $c1->modelo = "Bic Cristal";
            $c1->cor = "Azul";
            var_dump($c1);
            ?>
        </pre>
    </body>
</html>
