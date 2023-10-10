<?php
namespace App\classes;
abstract class ExampleTwo
{
    public $price;
    protected $quantity;
    private $sum;

    public function demo()
    {
        echo 'In a demo';
    }

    abstract function test();
}