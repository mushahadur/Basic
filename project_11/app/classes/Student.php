<?php
namespace App\classes;

use App\classes\User;
use App\classes\Example;
use App\classes\ExampleTwo;
use App\classes\ExampleThree;


class Student extends ExampleTwo implements Example
{
    
    use ExampleThree;
    
    public $phone;
    

    public function __construct()
    {
        $this->name = 'Basis';
        //$this->email = 'info@bitm.com';
        //$this->phone = '017646478';

    }

    public function test()
    {
        echo 'In a test';
    }

    public function demo()
    {
        echo 'HELLLLOOOOOO';
    }

    public function manage()
    {
        
        echo $this->hello2();
        //echo " Name : $this->name  Email Address :  $this->email Phone Number : $this->phone";
    }

    public function one()
    {
        echo 'Hello one';
    }

    public function two()
    {
        echo 'Hello two';
    }


    public function three()
    {
        echo 'Hello three';
    }


    
}