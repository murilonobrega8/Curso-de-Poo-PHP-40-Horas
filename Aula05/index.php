<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once './ContaBanco.php';
                $p1 = new ContaBanco();
                
                $p1->abrirConta("CC");
                $p1->setDono("Jubileu");
                $p1->setNumConta(13001);
                $p1->depositar(300);
                $p1->sacar(350);
                $p1->pagarMensal();
                $p1->fecharConta();
                $p1->depositar(12);
                $p1->fecharConta();

                print_r($p1);
                
                $p2 = new ContaBanco();
                
                $p2->abrirConta("CP");
                $p2->setDono("Creuza");
                $p2->setNumConta(13002);
                $p2->depositar(500);
                $p2->sacar(100);
                $p2->pagarMensal();
                $p2->sacar(1000);
                $p2->fecharConta();
                $p2->sacar(530);
                $p2->fecharConta();

                print_r($p2);
            ?>
        </pre>
    </body>
</html>
