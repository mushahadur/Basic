<?php
namespace App\classes;
class PasswordGenaretor
{

    public $givenLength;
    public $passwordData = [];
    public $password;
    public $maxIndex;
    public $index;
    public $i;
    
    public function __construct($data)
    {
        $this->givenLength = $data['given_length'];
    }


    public function index()
    {
        $this->passwordData = ['A', '@','#','-','a','^',')','_','!'];
        $this->maxIndex =  count($this->passwordData) - 1;
        for($this->i=0; $this->i < $this->givenLength; $this->i++)
        {
            $this->index = rand(0, $this->maxIndex);
            $this->password .=$this->passwordData[$this->index];
        }
        
        return $this->password;
    }
}