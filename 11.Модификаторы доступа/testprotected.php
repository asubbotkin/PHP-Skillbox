<?php

class TestParent {
    protected function testMethod()
    {
        echo 'Private method' . PHP_EOL;
    }

    public function showMessage()
    {
        $this->testMethod();
    }
}

class testInheritance extends TestParent {
    public function testPublic()
    {
        $this->testMethod();
    }
}

$testParentObj = new TestParent();
$testInheritanceObj = new TestInheritance();


//$testParentObj->testMethod(); // ERROR!
$testParentObj->showMessage();
$testInheritanceObj->testPublic();
