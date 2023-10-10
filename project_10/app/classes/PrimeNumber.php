<?php

namespace App\classes;

class PrimeNumber
{
    private $givenNumber;
    private $i;
    private $result;
    private $c;

    public function __construct($data)
    {
        $this->givenNumber = $data['given_number'];
    }
    public function index()
    {
       for($this->i=1; $this->i <= $this->givenNumber; $this->i++)
       {
           if(($this->givenNumber % $this->i)==0)
           {
               $this->c++;
               
           }
       }
       if($this->c == 2)    // Undifine Constant
       {
           $this->result ="Your $this->givenNumber is Prime";
       }
       else{
        $this->result ="Your $this->givenNumber is Not Prime";
       }
       return $this->result;
    }
   

}