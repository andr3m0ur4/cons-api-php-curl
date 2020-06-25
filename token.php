<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php

            $url = "http://localhost:8080/api/token";
            $ch = curl_init($url);

            $data = array('email' => 'andre@teste.com', 'senha' => '123456');

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $resultado = json_decode(curl_exec($ch));

            //var_dump($resultado);

            echo "Token: " . $resultado->chave;
            
        ?>
    </body>
</html>
