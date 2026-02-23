<?php

$testArray = ['testValue' => 1099];

header('Content-Type: application/json');

if (isset($_GET['password']) && $_GET['password'] === '12345')
{
    if (isset($_GET['array_key']))
    {
        if(array_key_exists($_GET['array_key'], $testArray))
        {
            // В продакшене так делать не рекомендуется.
            // Нужно всегда проверять данные полученные в $_GET, $_POST и др.
            echo json_encode($testArray[$_GET['array_key']]);
        } else {
            http_response_code(500); // internal server error
        }
    }
} else
    {
        http_response_code(403); // access denied
        echo 'Wrong password!';
    }



