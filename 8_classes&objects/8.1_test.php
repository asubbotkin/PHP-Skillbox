<?php

class Test {
    private string $testField1, $testField2;


public function setValues() : void{
    $this->testField1 = 'This is';
    $this->testField2 = 'test!';
}
    public function showFields() : void{
        echo $this->testField1 . ' ' . $this->testField2 . PHP_EOL;
    }
}

$test = new Test();
$test->setValues();
$test->showFields();