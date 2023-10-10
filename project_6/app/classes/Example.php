<?php

namespace App\classes;

class Example
{

    public $startingNumber;
    public $endingNumber;
    public $result;
    public $i;
    public $break;
    public $arrlength;
    public $x;
    

    public function __construct($data)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data['ending_number'];

    }

    public function index()
    {
      
        for($this->startingNumber; $this->i <= $this->endingNumber; $this->i ++)
        {
           $this->result .=$this->i.' '; 
           
        }

        return $this->result;
    }
}