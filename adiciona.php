<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php

            $url = "http://localhost:8080/api/v1/produtos/adiciona";
            $ch = curl_init($url);

            $data = http_build_query(array(
                'titulo' => 'Mouse Logitech',
                'descricao' => 'Mouse sem fio',
                'preco' => 59.90,
                'fabricante' => 'Logitech'
            ));

            $header = array(
                'X-Token: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MSwibm9tZSI6IkFuZHJlIE1vdXJhIiwiZW1haWwiOiJhbmRyZUB0ZXN0ZS5jb20iLCJzZW5oYSI6ImUxMGFkYzM5NDliYTU5YWJiZTU2ZTA1N2YyMGY4ODNlIiwiY3JlYXRlZF9hdCI6bnVsbCwidXBkYXRlZF9hdCI6bnVsbH0.vf-YePeikd6zZ7nt7uyOkFp-MjEnFte7OVBSoV-tupo'
            );

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $resultado = json_decode(curl_exec($ch));

            //print_r($resultado);

            echo "Titulo: " . $resultado->titulo . "<br>";
            echo "Descricao: " . $resultado->descricao . "<br>";
            echo "Preco: " . $resultado->preco . "<br>";
            echo "Fabricante: " . $resultado->fabricante . "<br>";
            
        ?>
    </body>
</html>
