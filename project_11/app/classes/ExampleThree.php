<?php

namespace App\classes;
trait ExampleThree
{
    public $value1;
    protected $value2;
    private $value3;



    public function hello()
    {
        echo 'In Hello of our country ';
    }


    protected function hello1()
    {
        echo 'In Hello One';
    }

    private function hello2()
    {
        echo 'In hello three';
    }

}