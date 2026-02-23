<?php

class BookController
{
    protected $booksList = ['War and peace', 'Harry Potter', 'Crime and punishment'];

    public function list()
    {
        return json_encode($this->booksList);
    }
}