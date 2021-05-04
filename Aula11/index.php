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
//            require_once 'Pessoa.php';
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            $v1 = new Visitante();
            $v1->setNome('Karlanni');
            $v1->setSexo('Feminino');
            $v1->setIdade(33);
            print_r($v1);
            
            $a1 = new Aluno();
            $a1->setNome('Arthur');
            $a1->setMatricula(123456);
            $a1->setIdade(3);
            $a1->setCurso("Maternal II");
            $a1->pagarMensalidade();
            print_r($a1);
            
            $b1 = new Bolsista();
            $b1->setNome('Douglas');
            $b1->setMatricula(272727);
            $b1->setBolsa(1);
            $b1->setIdade(27);
            $b1->setCurso("Graduação");
            $b1->pagarMensalidade();
            print_r($b1);
            

            // put your code here
            ?>
        </pre>
    </body>
</html>
