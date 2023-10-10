<?php

namespace App\classes;

class Login
{
    private $email;
    private $password;
    private $userEmail;
    private $userPassword;

    public function __construct($data = null)
    {
        if($data)
        {
            $this->email = $data['email'];
            $this->pasword = $data['password'];
        }
    }
    public function index()
    {
       header('Location: pages/login.php');
    }

    public function adminLogin()
    {
        $this->userEmail = 'admin@admin.com';
        $this->userPassword = '12345';

        if($this->email == $this->userEmail  && $this->userPassword == $this->password)
        {
            header('Location:  home.php');
        }
        else
        {
            //header('Location:  login.php');
            return 'Sorry...Email address or password is invalid';
        }
    }
     
}