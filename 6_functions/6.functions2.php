<?php

$numbersArray = [1,2,3,4,5,6,7,8,9];
$elementsNumber = count($numbersArray);

// Значения исходного массива не изменились, т.к. функция truncArray
// работает с КОПИЕЙ исходного массива
function truncArray($numbersArray, $elementsNumber){
    for($i = 0; $i < $elementsNumber; $i++){
        if( $i % 2 != 0 ){
            unset($numbersArray[$i]);
        }
    }
}

truncArray($numbersArray, $elementsNumber);
print_r($numbersArray);


// А функции truncArrayLink мы передаем ссылку на исходный массив numbersArray
// поэтому функция truncArrayLink ИЗМЕНИТ содержимое исходного массива
function truncArrayLink(&$numbersArray, $elementsNumber){
    for($i = 0; $i < $elementsNumber; $i++){
        if( $i % 2 != 0 ){
            unset($numbersArray[$i]);
        }
    }
}

truncArrayLink($numbersArray, $elementsNumber);
print_r($numbersArray);