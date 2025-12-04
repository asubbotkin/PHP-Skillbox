<?php

    class TestParent {
        private function testMethod()
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
            $this->showMessage();
        }
    }

    $testParentObj = new TestParent();
    $testInheritanceObj = new TestInheritance();

    $testParentObj->showMessage();
    $testInheritanceObj->testPublic();
