<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php

            $url = "http://localhost:8080/api/v1/produtos/lista";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            $resultado = json_decode(curl_exec($ch));

            //var_dump($resultado);

            foreach ($resultado as $produto) {
                //var_dump($ator);
                echo "Titulo: " . $produto->titulo . "<br>";
                echo "Descricao: " . $produto->descricao . "<br>";
                echo "Preco: " . $produto->preco . "<br>";
                echo "Fabricante: " . $produto->fabricante . "<br>";
                
                echo "<hr>";
            }
            
        ?>
    </body>
</html>
