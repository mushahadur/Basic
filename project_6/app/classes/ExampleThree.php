<?php
namespace App\classes;

class ExampleThree
{
    public $result = [];
    
    
    public function __construct($data) 
    {

       $this->result= $data;
    }
    public function index()
    {
        return $this->result;
    }


   
}