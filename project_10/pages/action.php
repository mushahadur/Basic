<?php

require_once '../vendor/autoload.php';

use App\classes\PrimeNumber;
use App\classes\Login;



 if(isset($_POST['btn']))
 {
     $primeNumber = new PrimeNumber($_POST);
     $result = $primeNumber->index();
     include 'home.php';
 }

  if(isset($_POST['loginBtn']))
 {
    print_r($_POST);
    $login = new Login($_POST);
    $message = $login->adminLogin();
    include 'login.php';
 }