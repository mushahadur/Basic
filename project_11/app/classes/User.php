<?php
namespace App\classes;


class User
{

    public $name;
    public $email;
    public $phone;
    private $data = [];
    

    public function __construct()
    {
    

    }

    public function index()
    {
        
        $this->name = 'BITM';
        $this->email = 'info@bitm.org.bd';
        $this->phone = '017645656478';

        return "User Name : $this->name  Email Address :  $this->email Phone Number : $this->phone";
    }

    public function getAllUser()
    {
        $this->data = [


            0 => [
                'name' => 'mrk Pulock',
                'email' => 'mrk@gmail.com',
                'password' => '1234',

            ],
            1 => [
                'name' => 'Pulock',
                'email' => 'pulock@gmail.com',
                'password' => '5678',

            ],
            2 => [
                'name' => 'Khan',
                'email' => 'khan@gmail.com',
                'password' => '4321',

            ]
        ];
        return $this->data;
    }

    
}