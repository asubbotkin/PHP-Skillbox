<?php

$visibleString = 'Very important information';

//if(strlen($visibleString) > 0) {
//    for($i = 0; $i < strlen($visibleString); $i++) {
//        echo $visibleString[$i] . PHP_EOL;
//    }
//}


// Для того чтобы функция testOutput УВИДЕЛА переменную $visibleString можно:
// 1. передать эту переменную как параметр function testOutput($visible string)
// 2. использовать директиву global
function testOutput() : void
{
    global $visibleString;
    if(strlen($visibleString) > 0) {
        for($i = 0; $i < strlen($visibleString); $i++) {
            echo $visibleString[$i] . PHP_EOL;
        }
    }
}

testOutput();
