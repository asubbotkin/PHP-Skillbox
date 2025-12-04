<?php

    class Ticker
    {
        private string $string;

        public function setString(string $value): void
        {
            if(stripos($value, '<script>') !== false)
            {
                echo 'Строка содержит инъекцию кода!';
                return;
            }
            $this->string = $value;
        }

        public function getString(): string
        {
            return strtoupper($this->string);
        }
    }

    $ticker = new Ticker();
    $ticker->setString('alert()');
    echo $ticker->getString() . PHP_EOL;

