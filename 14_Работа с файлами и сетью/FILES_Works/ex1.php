<?php

$fp = fopen('git.txt', "r");

echo filesize('git.txt'); // Количество байт в файле

    // Прочитает весь файл, вариант 1
$filePart = fread($fp, filesize('git.txt'));
echo $filePart . PHP_EOL;
    // Прочитает весь файл, вариант 2
while (!feof($fp)) {
    echo fread($fp, 1);
}


$filePart = fread($fp, 100); // Прочитает первые 100 байт из файла git.txt
 echo $filePart . PHP_EOL;

fclose($fp);

