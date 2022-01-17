<?php

class User
{
    public $id;
    public $email;
    public $password;
    public $first_name;
    public $last_name;
    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->first_name, 'string');
        settype($this->last_name, 'string');
        settype($this->password, 'string');
        settype($this->email, 'string');
    }
}