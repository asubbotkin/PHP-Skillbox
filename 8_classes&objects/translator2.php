<?php
class Translator{
    private $dictionary = ['en' => [], 'de' => []];
    private $language;

    public function __construct($language){

        $this->language = $language;
        // EN
        $this->addWord('лес', 'forest', 'en');
        $this->addWord('работа', 'work', 'en');
        // DE
        $this->addWord('лес', 'wald', 'de');
        $this->addWord('работа', 'arbeit', 'de');

    }

    public function addWord(string $russianWord, string $translation, $language) {
        if(array_key_exists($translation, $this->dictionary[$this->language])) {
            return;
        }
        $this->dictionary[$this->language][$translation] = $russianWord;
    }

    public function translate($foreignWord) {
        if(array_key_exists($foreignWord, $this->dictionary[$this->language])) {
            return $this->dictionary[$this->language][$foreignWord];
        }
        return false;
    }
}

$translatorEN = new Translator('en');
$translatorDE = new Translator('de');

echo $translatorDE->translate('wald') . PHP_EOL;
echo $translatorEN->translate('forest') . PHP_EOL;
