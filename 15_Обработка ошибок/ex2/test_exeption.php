<?php

$cardNumber = 1234567899004321;

class CardNumberException extends Exception{

}

function checkCardNumber($cardNumber) {
    if ( strlen($cardNumber) != 16 ) {
        throw new CardNumberException('Wrong card number format, try again');
//        echo 'Wrong card number, try again' . PHP_EOL;
    } else echo 'Card number format is valid' . PHP_EOL;
}

try {
    checkCardNumber(1234123412341234);
} catch (CardNumberException $exception) {
    echo $exception->getMessage() . PHP_EOL;
} finally {
    echo 'Execution finished' . PHP_EOL;
}
