<?php

// $xmlFile - это ОБЪЕКТ SimpleXMLElement Object
$xmlFile = simplexml_load_file('sample.xml');
print_r($xmlFile);

echo $xmlFile->book->count() . PHP_EOL;

// Вывод данных ОБЪЕКТА $xmlFile
echo $xmlFile->book[2]->author . ' ' . $xmlFile->book[2]->title . PHP_EOL;

// Изменение/удаление данных
$xmlFile->book[2]->author = 'Lev Tolstoy';
$xmlFile->book[2]->title = 'War & peace';

unset($xmlFile->book[count($xmlFile->book)-1]);
print_r($xmlFile);

// Перед записью в файл объект XML нужно преобразовать
// для этого используется метод asXML() объекта SimpleXMLElement
file_put_contents('sample1.xml', $xmlFile->asXML());
