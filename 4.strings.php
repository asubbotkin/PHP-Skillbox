<?php

$str1 = 'Привет, мир!';
//echo $str1;

$str2 = 'Хочу сказать \'Привет, мир!\'...'; // экранирование символов
//echo $str2;

$str3 = 'Символ \ называется "обратный слэш".';
//echo $str3;

// В одинарных кавычках не работают спец символы, перенос строки, табуляция и др.

$str4 = 'Привет, мир!\rА эта часть уже на новой строке?\t - НЕТ!';
//echo $str4;

// В двойных кавычках РАБОТАЮТ спец символы, так же в двойные кавычки можно
// вставлять переменные.

$age = 47;
$str5 = "\n Привет, мир! \t Мне $age лет.\n";
//echo $str5;

$str6 = <<<EOD
Привет, мир!
Как дела? "Хорошо!".
Это строка через here\doc синтаксис, в ней не нужно экранировать спец символы!!!\n
EOD;
//echo $str6;

// Конкатенация строк

$str7 = 'Hello';
$str8 = 'World!';
$str9 = $str7 . $str8;
//echo $str9;

// Короткая запись

$str10 = "\nHello";
$str10 .= ' world!';
//echo $str10;

// Длина строки. Каждый латинский символ кодируется одним байтом

$str11 = 'Hello';
//var_dump($str11);           // Длина строки = 5

// Каждый НЕ латинский символ кодируется 2-я байтами

$str12 = 'Привет';
//var_dump($str12);           // Длина строки = 12

$length = strlen($str11);
//var_dump($length);
$length = strlen($str12);
//var_dump($length);

// Для того чтобы получить реальную длину строки(количество символов)
// в не латинской кодировке нужно использовать префикс mb_

$length = mb_strlen($str12);
//var_dump($length);          // Длина строки = 6 !!! УРА !!! Это правильно - 6 символов

// Получение/изменение символа строки по его индексу

// индекс[01234]
$str11 = 'Hello';
$letter_e = $str11[1];
//var_dump($letter_e);
$str11[1] = 'E';
//var_dump($str11);

$letter_o = $str11[strlen($str11)-1];
//var_dump($letter_o);

// Функции работы со строками

$str12 = 'Hello, world!';
$word = substr($str12, 0, 5);
//echo $word; // Выводит Hello

$part = substr($str12, 4) ;
echo $part; // Выводит o, world!

$part1 = substr($str12, -6);
//echo $part1;  // Выведет "world!" отсчитает 6 символов от конца строки

$str13 = 'abc, abc, cba, cba';
$index = strpos($str13, 'abc');
//var_dump($index); // Выведет 0

$index = strpos($str13, 'abc', 1);
//var_dump($index); // Выведет 5. Индекс символа, или начальный индекс комбинации символов

$index = strpos($str13, 'ABC', 1);
//var_dump($index); // Выведет false т.к. функция strpos чувствительна к регистру

$index = stripos($str13, 'ABC', 1);
//var_dump($index); // Выведет 5 т.к. функция stripos НЕ чувствительна к регистру

// Если функции str_replace и str_ireplace не находят совпадений, то они возвращают ИСХОДНУЮ строку
$hello = $str12;
$modifiedHello =  str_replace('Hello', 'Hi', $hello);
//echo $modifiedHello;    // Чувствительна к регистру

$modifiedHello =  str_ireplace('HeLlo', 'Hi', $hello);
//echo $modifiedHello;    // Не чувствительна к регистру

// Так же обе эти функции опционально умеют считать количество совпадений
$multipleHello = 'Hello, world!, Hello, world!, Hello, world!, Hello, world!, ';
//echo str_ireplace('HelLo', 'Hi', $multipleHello, $count);
//var_dump($count);

//echo strtolower($word); // Все буквы сделать строчными
//echo strtoupper($word); // Все буквы сделать заглавными

$dirtyHello = "\n\n   hello   ";
$cleanHello = trim($dirtyHello);    // Удаляет служебные символы и лишние пробелы в начале и в конце строки
//echo $cleanHello;
//echo ltrim($dirtyHello);    // Удаляет служебные символы и лишние пробелы в начале строки
//echo rtrim($dirtyHello);    // Удаляет служебные символы и лишние пробелы в конце строки
