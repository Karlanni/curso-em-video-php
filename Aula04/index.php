<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 POO</title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'Caneta.php';

            $c1 = new Caneta('Bic Cristal', 'Azul', '0.7');
            print_r($c1);
            ?>
        </pre>
    </body>
</html>
