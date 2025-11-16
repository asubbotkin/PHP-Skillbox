<?php

class Translator{
    private $dictionary = [];

    public function addWord(string $russianWord, string $translation) {
        if(array_key_exists($translation, $this->dictionary)) {
            return;
        }
        $this->dictionary[$translation] = $russianWord;
    }

    public function translate($englishWord) {
        if(array_key_exists($englishWord, $this->dictionary)) {
            return $this->dictionary[$englishWord];
        }
        return false;
    }
}

$translator = new Translator();
$translator->addWord('лес', 'forest');
$translator->addWord('работа', 'work');

$translationResult = $translator->translate('work');

if($translationResult) {
    echo $translationResult . PHP_EOL;
} else {
    echo "Данного слова нет в словаре" . PHP_EOL;
}
