<?php
    $codigo = $_POST["codigo"];

    $url = "https://jsonplaceholder.typicode.com/posts/1";

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($curl);
    
    if(curl_errno($curl))
        {
            echo "Falha na requisição: ".curl_errno($curl);
        }
        else
            {
                echo "Postagem $codigo excluída com sucesso!!!";
            }
    curl_close($curl);
    ?>