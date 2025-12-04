<?php

class Ticker
{
    private string $string;

//    public function setString(string $value): void
//    {
//        if(stripos($value, '<script>') !== false)
//        {
//            echo 'Строка содержит инъекцию кода!';
//            return;
//        }
//        $this->string = $value;
//    }

    public function __set($name, $value)
    {
        if($name == 'string')
        {
//            $this->setString($value);
            if(stripos($value, '<script>') !== false)
            {
                echo 'Строка содержит инъекцию кода!';
                return;
            }
            $this->string = $value;
        }
    }
//    public function getString(): string
//    {
//        return strtoupper($this->string);
//    }

    public function __get($name)
    {
        if($name == 'string')
        {
            return strtoupper($this->string);
        }
    }
}

$ticker = new Ticker();
$ticker->string = "Alert!";
echo $ticker->string . PHP_EOL;

