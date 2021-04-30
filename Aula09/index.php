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
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $pessoa[0] = new Pessoa("Pedro", 30, "Masculino");
            $pessoa[1] = new Pessoa("Karlanni", 32, "Feminino");

            $livro[0] = new Livro("Dividendos", "Buffet", 250, $pessoa[0]);
            $livro[1] = new Livro("PHP", "Guanabara", 120, $pessoa[1]);
            
            $livro[1]->detalhes();
            ?>
        </pre>
    </body>
</html>
