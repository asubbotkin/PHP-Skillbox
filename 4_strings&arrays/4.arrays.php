<?php

// Согласно современным стандартам кодирования,
// принято оставлять запятую после последнего элемента массива

// Индексированные массивы

$list1[0] = 'Фрукты';
$list1[1] = 'Овощи';
$list1[2] = 'Ягоды';
//echo $list1[1];

$list2[] = 'a';
$list2[] = 'b';
$list2[] = 'c';
//echo $list2[1];

$list3 = [1, 3, 5, 7, 9,];
//echo $list3[3];

// Ассоциативные массивы

$list4['vegetables'] = 'Овощи';
$list4['fruits'] = 'Фрукты';
$list4['berries'] = 'Ягоды';
//echo $list4['berries'];

$list5 = ['vegetables' => 'Овощи', 'fruits' => 'Фрукты', 'berries' => '','' => 'Ягоды',];
//echo $list5['fruits'];

// Размер массива функции sizeOf и count
// обе эти функции работают ОДИНАКОВО с обоими типами массивов

$sizeOfArray = sizeof($list3);
//var_dump($sizeOfArray);
$sizeOfArray = count($list3);
//var_dump($sizeOfArray);

$sizeOfArray = sizeof($list5);
//var_dump($sizeOfArray);
$sizeOfArray = count($list5);
//var_dump($sizeOfArray);

// Преобразование строк в массивы и обратно,
// функции explode(строка -> массив) и implode(массив -> строка)

// Преобразование строки в массив

$hello = 'Hello world';
$resArray1 = explode(' ', $hello);
//var_dump($resArray1);    // Результат: resArray[0] = 'Hello', resArray[1] = 'world'

// Если символ, указанный в параметре сепаратор не найден,
// то вся строка становится одним элементом массива

$resArray2 = explode('x', $hello);
//var_dump($resArray2);    // Результат: resArray[0] = 'Hello world'

// Преобразование массива в строку

$list6 = [1, 2, 3, 4, 5,];
$resString = implode(' ', $list6);
//var_dump($resString);   // Результат - строка "1 2 3 4 5"

// Сепаратор, при преобразовании массива в строку, может быть АБСОЛЮТНО любой,
// это может быть один произвольный символ, или комбинация символов.
// Например:

$resString = implode('-!-', $list6);
//var_dump($resString);   // Результат - строка "1-!-2-!-3-!-4-!-5"

// Многомерные массивы

$list6 = [1, 2, 3, 'a',];
$list7 = [4, 5, 6, 'b',];

$mList = [
    's1' => $list6,
    's2' => $list7,
    's3' => [7, 8, 9, 'c',],
];

//var_dump($mList['s3']);
//var_dump($mList['s3'][1]);

//var_dump(sizeof($mList));   // Возвращает 3 - количество строк многомерного массива

$cities = [
    'russia' => [
        'msk' => 'Москва',
        'spd' => 'Санкт-Петербург',
    ],
    'germany' => ['Берлин', 'Мюнхен',],
];
//var_dump($cities['russia']['spb']); // Доступ к элементу многомерного массива 'Санкт-Петербург'

// Разбиение массивов на ключи и значения, функции array_keys() и array_values().
// Результат работы обеих функций это - одномерный, индексированный массив со значениями ключей/значений
// входного массива

$letters = [
    'a' => 'Letter a',
    'b' => 'Letter b',
    'c' => 'Letter c',
];
$keysOfLetters = array_keys($letters);
$valuesOfLetters = array_values($letters);
//var_dump($valuesOfLetters);

// Слияние массивов функция array_merge

$letters2 = [
    'a' => 'Letter a',
    'b' => 'Letter b',
];
$letters3 = [
    'c' => 'Letter c',
    'd' => 'Letter d',
];
$letters4 = [
    'c' => 'Letter c',
    'd' => 'Letter d',
    'a' => 'Letter x',
];

$resArray1 = array_merge($letters2, $letters3);
//var_dump($resArray1);

// Если в процессе работы с АССОЦИАТИВНЫМИ МАССИВАМИ найден уже существующий ключ,
// то будет изменено только его значение. Новый элемент создан НЕ БУДЕТ !!!

$resArray2 = array_merge($letters2, $letters4);
//var_dump($resArray2);   // 'a' => 'Letter x', 'b' => 'Letter b', 'c' => 'Letter c', 'd' => 'Letter d'

// В случае слияния индексированных массивов с одинаковыми значениями, эти значения
// так же будут добавлены в результирующий массив как отдельные члены массива

$lettersArray1 = ['a', 'b', 'c'];
$lettersArray2 = ['d', 'e', 'a'];
$lettersArray3 = array_merge($lettersArray1, $lettersArray2);
//var_dump($lettersArray3); // Результат: a b c d e a

$array1 = [
    'a' => 'Letter a',
    'Letter b',
];
$array2 = [
    'a' => 'Letter a2',
    'b' => 'Letter b',
    'Letter d',
];
$array3 = array_merge($array1, $array2);
//var_dump($array3);

// Функция array_combine() объединяет 2 простых(индексированных) массива и в результате
// создает новый АССОЦИАТИВНЫЙ массив, где ключи - это значения первого массива, а
// значения это - значения второго массива.
// !!!!!!  ВАЖНО  !!!!!! размеры обоих, передаваемых массивов должны быть ОДИНАКОВЫ.

$array1 = ['a', 'b'];
$array2 = ['Letter a', 'Letter b'];
$array3 = array_combine($array1, $array2);
//var_dump($array3); // Результат 'a' => 'Letter a' 'b' => 'Letter b'

// Функция array_flip() меняет местами ключи со значениями входного массива т.е.
// Ключ становится значением, а значение ключом.

$flipArray1 = [
    'a' => 'Letter a',
    'b' => 'Letter b',
];
$resFlipArray = array_flip($flipArray1);
//var_dump($resFlipArray); // Результат 'Letter a' => 'a' 'Letter b' => 'b'

$flipArray1 = [
    'a' => 'Letter a',
    'b' => 'Letter b',
    'x' => 'Letter a',
];
$resFlipArray = array_flip($flipArray1);
//var_dump($resFlipArray); // Результат 'Letter a' => 'x' 'Letter b' => 'b'

// Функция array_reverse() зеркально разворачивает элементы массива. Первый элемент становится последним

$reversedArray1 = [
    'a' => 'Letter a',
    'b' => 'Letter b',
    'c' => 'Letter c',
];
$reversedArray = array_reverse($reversedArray1);
//var_dump($reversedArray);

$reversedArray2 = ['a', 'b', 'c'];
$reversedArray = array_reverse($reversedArray2);
//var_dump($reversedArray); // c-[0], b-[1], a-[2]

// Если добавлен опциональны параметр true, то будут развернуты и индексы исходного массива
$reversedArray = array_reverse($reversedArray2, true);
//var_dump($reversedArray); // c-[2], b-[1], a-[0]

// Функции in_array() и array_search()
// in_array() возвращает true/false в зависимости от того, есть ли такой элемент в массиве

$letters = ['a', 'b', 'c', 'd', 'e'];
//var_dump(in_array('a', $letters)); // Результат - true
//var_dump(in_array('x', $letters)); // Результат - false

// array_search() может возвращать
// 1. integer - индекс найденного элемента простого массива
// 2. string - ключ найденного элемента ассоциативного массива
// 3. boolean-false - если искомого значения нет в исходном массиве

$letters1 = ['a', 'b', 'c'];
$letters2 = [
    'a' => 'Letter a',
    'b' => 'Letter b',
    'c' => 'Letter c',
];
$letters3 = array_search('b', $letters1);
var_dump($letters3); // Результат - int(1)
$letters3 = array_search('x', $letters1);
var_dump($letters3); // Результат - false

$letters3 = array_search('Letter b', $letters2);
var_dump($letters3); // Результат - "b"
$letters3 = array_search('Letter', $letters2);
var_dump($letters3); // Результат - false