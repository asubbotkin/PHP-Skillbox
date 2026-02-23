<?php

class UserController
{
    protected $usersList = ['Vasea', 'Fedea', 'Petea'];

    public function list()
    {
        return json_encode($this->usersList);
    }
}