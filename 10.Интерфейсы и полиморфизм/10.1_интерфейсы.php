<?php


interface StringWriter
{
    public function writeString($string);
}

class FileWriter implements StringWriter
{
    public function writeString($string)
    {
        file_put_contents('example.txt', $string);
    }
}

class ScreenWriter implements StringWriter
{
    public function writeString($string)
    {
        echo $string . PHP_EOL;
    }
}

class StringProcessor
{
    private $writer;
    private $string;

    public function __construct($writer, $string)
    {
        $this->writer = $writer;
        $this->string = $string;
    }

    public function write($string)
    {
        $this->writer->writeString($string);
    }
}

$fileWriter = new FileWriter();
$screenWriter = new ScreenWriter();

$testString = 'Hello World!';
$stringFileProcessor = new StringProcessor($fileWriter, $testString);
$stringScreenProcessor = new StringProcessor($screenWriter, $testString);

$stringFileProcessor->write($testString);
$stringScreenProcessor->write($testString);