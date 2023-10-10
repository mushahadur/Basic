<?php
require_once '../vendor/autoload.php';

use App\classes\ImageUpload;




if(isset($_POST['btn']))
{
    $imageupload = new ImageUpload($_POST,$_FILES);
    $result = $imageupload->index();
    extract($result);
    include "home.php";
}


