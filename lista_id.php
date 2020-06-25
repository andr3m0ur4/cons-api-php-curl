<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php

            $id = 5;

            $url = "http://localhost:8080/api/v1/produtos/lista/{$id}";

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPGET, true);
            $resultado = json_decode(curl_exec($ch));

            //print_r($resultado);

            echo "Titulo: " . $resultado->titulo . "<br>";
            echo "Descricao: " . $resultado->descricao . "<br>";
            echo "Preco: " . $resultado->preco . "<br>";
            echo "Fabricante: " . $resultado->fabricante . "<br>";
            
        ?>
    </body>
</html>
