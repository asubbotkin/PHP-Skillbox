<?php

class A {
    public string $message;
}

class B extends A {
    public function __construct(){
        $this->message = 'Hello World!';
    }

    public function showMessage(){
        echo $this->message;
    }
}

$bObject = new B();

$bObject->showMessage();
