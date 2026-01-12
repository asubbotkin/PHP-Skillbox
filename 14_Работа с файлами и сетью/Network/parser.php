<?php

libxml_use_internal_errors(true); // Отключает ошибки, если сайт загружен не полностью

$nytimesContent = file_get_contents('https://www.nytimes.com/');

$domContent =  new DOMDocument();
$domContent->loadHTML($nytimesContent);

$siteContent = $domContent->getElementById('site-content')->nodeValue;
print_r($siteContent) . PHP_EOL;

file_put_contents('new.html', $nytimesContent);