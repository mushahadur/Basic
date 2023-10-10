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

 else if(isset($_POST['loginBtn']))
 {
     $login = new Login($_POST);
     $message = $login->adminLogin();
     include 'login.php';

 }

 else if (isset($_GET['status']))
 {
     if($_GET['status'] == 'logout')
     {
         $login = new Login();
         $login->adminLogout();
     }
 }