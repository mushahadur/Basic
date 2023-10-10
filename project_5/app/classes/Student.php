<?php
namespace App\classes;

class student
{

    public $firstName;
    public $lastName;
    public $fullName;

    public function __construct($data)
    {
        $this->firstName = $data['first_name'];
        $this->lastName = $data['last_name'];
    }


    public function index()
    {
        $this->fullName = $this->firstName.' '.$this->lastName;
        return $this->fullName;
    }
}