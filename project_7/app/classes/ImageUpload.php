<?php
namespace App\classes;
class ImageUpload
{
    public $value;  /// Proparty
    public $directory;  /// Proparty
    public $imageName;  /// Proparty

    public function __construct($data)
    {
        $this->value = $data;
    }

    public function index()
    {
        
        echo '<pre>';
        
        print_r($_FILES);
        echo '</pre>';


        $this->imageName = $_FILES['image']['name'];
        $this->directory = '../assets/img/'.$this->imageName;
        move_uploaded_file($_FILES ['image']['tmp_name'], $this->directory);
        echo 'done';

    }

}