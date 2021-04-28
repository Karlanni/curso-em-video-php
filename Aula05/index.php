<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 POO</title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'ContaBanco.php';
            
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();
            
            $p1->abrirConta('cc');
            $p1->setNumero(1111);
            $p1->setDono('Karlanni');
            
            $p2->abrirConta('cp');
            $p2->setNumero(2222);
            $p2->setDono('Pedro');
            
            $p1->depositar(500);
            $p2->depositar(300);
            
            $p1->sacar(20);
            
            $p2->pagarMensalidade();
            
            $p1->fecharConta();
            
            print_r($p1);
            print_r($p2);
            ?>
        </pre>
    </body>
</html>
