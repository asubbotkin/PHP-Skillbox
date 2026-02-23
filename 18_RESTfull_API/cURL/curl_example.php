<?php

    $curl = curl_init();
    $curlOptions = [
        CURLOPT_URL => 'https://catfact.ninja/fact',
        CURLOPT_HTTPGET => true,

    ];

//    curl_setopt($curl, CURLOPT_URL, 'https://catfact.ninja/fact');
//    curl_setopt($curl, CURLOPT_HTTPGET, 1);
//    curl_setopt($curl, CURLOPT_PORT, 443);
    curl_setopt_array($curl, $curlOptions);

    echo curl_exec($curl);