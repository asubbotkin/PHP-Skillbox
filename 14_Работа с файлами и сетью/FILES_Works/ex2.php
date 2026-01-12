<?php

// Читает все содержимое файла, и возвращает результат в виде строки.
// Работает быстрее чем fread() !!!
$fileContent = file_get_contents('git.txt');
//echo $fileContent . PHP_EOL;

$testArray1 = [ 1, 2, 3, 9, 8, 7, 6, 5, 4, 3, 2 ];
$testArray2 = [ 'a', 'b', 'c', 'd', 'e', 'f', 'x', 'y', 'z' ];


// Запишет массив в файл, если файла с таким именем не существует, то он будет создан
file_put_contents('ex2.txt', $testArray1);
echo ex2 . phpfile_get_contents('ex2.txt') . PHP_EOL;

// Перезапишет файл новыми данными
file_put_contents('ex2.txt', $testArray2);
echo ex2 . phpfile_get_contents('ex2.txt') . PHP_EOL; // Результат: abcdefxyz


// Чтобы дописать данные в конец файла использую функцию file_put_contents
// необходимо указать 3-й параметр в вызове функции.
// Это константа FILE_APPEND
file_put_contents('ex2.txt', $testArray1);
file_put_contents('ex2.txt', $testArray2, FILE_APPEND);
echo ex2 . phpfile_get_contents('ex2.txt') . PHP_EOL;                    // Результат: 12398765432abcdefxyz


//$fp = fopen('ex2.txt', 'r'); // Открыть файл для чтения
//$fp = fopen('ex2.txt', 'a'); // Открыть файл для добавления/записи APPEND
$fp = fopen('ex2.txt', 'a+'); // Открыть файл для чтения/записи READ/APPEND

foreach ($testArray1 as $value) {
    fwrite($fp, $value);
}

foreach ($testArray2 as $value) {
    fwrite($fp, $value);
}

$fileContent = file_get_contents('ex2.txt');
//$fileContent = fread($fp, filesize('ex2.txt'));
echo $fileContent . PHP_EOL;
fclose($fp);