<?php

require_once '../vendor/autoload.php';
use App\classes\PasswordGenaretor;
use App\classes\ImageUpload;

if(isset($_POST['btn']))
{
    $passwordGenaretor = new PasswordGenaretor($_POST);
    $result = $passwordGenaretor->index();
    include 'home.php';
}


if(isset($_POST['btn1']))
{
    $imageUpload = new ImageUpload($_POST);
    $result = $imageUpload->index();
    // include 'example-tow.php';
}