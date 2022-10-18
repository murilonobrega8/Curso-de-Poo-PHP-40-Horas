<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>"Livraria CursoEmVídeo"</title>
    </head>
    
    <body>
        <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Livro.php';
                
                $p[0] = new Pessoa("Pedro", 22, "M");
                $p[1] = new Pessoa("Maria", 31, "F");
                
                $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
                $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
                $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);
                
                print_r($l[0]);
                print_r($l[1]);
                print_r($l[2]);
                echo '------------FIM';
                
                $l[0]->abrir();
                $l[1]->abrir();
                $l[2]->abrir();
                
                print_r($l[0]);
                print_r($l[1]);
                print_r($l[2]);
                echo '------------FIM';
                
                $l[1]->fechar();
                
                print_r($l[0]);
                print_r($l[1]);
                print_r($l[2]);
                echo '------------FIM';
                
                $l[0]->avancarPag();
                $l[2]->avancarPag();
                
                print_r($l[0]);
                print_r($l[1]);
                print_r($l[2]);
                echo '------------FIM';
                
                $l[2]->avancarPag();
                $l[0]->voltarPag();
                
                print_r($l[0]);
                print_r($l[1]);
                print_r($l[2]);
                echo '------------FIM';
                
                $l[2]->folhear(120);
                $l[0]->folhear(150);
                
                print_r($l[0]);
                print_r($l[1]);
                print_r($l[2]);
                echo '------------FIM';
                
                $l[0]->detalhes();
                
                $l[1]->detalhes();
                
                $l[2]->detalhes();
                
                $p[0]->fazerAniver();
                $p[0]->status();
            ?>
        </pre>
    </body>
</html>
