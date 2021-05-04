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
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome('Karlanni');
            $p2->setNome('Pedro');
            $p3->setNome('Gabriel');
            $p4->setNome('Luís');
            
            $p2->setCurso("Informática");
            $p3->setSalario(2.500);
            $p4->setSetor('Estoque');

            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            ?>
        </pre>
    </body>
</html>
