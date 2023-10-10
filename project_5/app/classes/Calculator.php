<?php

namespace App\classes;

class Calculator
{

    public $firstName;
    public $secondName;
    public $result;
    public $action;


    public function __construct($data)
    {
        $this->firstName  = $data['first_namber'];
        $this->secondName = $data['second_namber'];
        $this->action     = $data['action'];
    }




    public function index()
    {

        switch($this->action)
        {
            case '+':
                $this->result = $this->add();
                break;

                case '-':
                $this->result = $this->sub();
                break;

                case '*':
                $this->result = $this->multi();
                break;

                case '/':
                $this->result = $this->div();
                break;

                case '%':
                $this->result = $this->rem();
                break;
        }
                
        return $this->result;
    }          
       

    protected function add()
    {
        return $this->firstName + $this->secondName;
    }

    protected function sub()
    {
        return $this->firstName - $this->secondName;
    }

    protected function multi()
    {
        return $this->firstName * $this->secondName;
    }

    protected function div()
    {
        return $this->firstName / $this->secondName;
    }

    protected function rem()
    {
        return $this->firstName % $this->secondName;
    }

        
 }

