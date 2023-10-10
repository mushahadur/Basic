<?php
namespace App\classes;

class ImageUpload
{
    private $post;
    private $file;
    private $directory;
    private $imageName;
    private $check;
    private $fileType;
    private $name;
    private $test;

    public function __construct($data, $file)
    {
        $this->post = $data;
        $this->file = $file;
    }

    public function index()
    {

        $this->imageName = $this->file['image']['name'];
        $this->fileType  =  pathinfo($this->file['image']['name'], PATHINFO_EXTENSION);
        $this->test      = str_replace(' ','_',$this->post['name']);
        $this->name      = $this->test.'_'.time().'.'.$this->fileType;
      


        $this->directory = '../assets/img/'.$this->name;
        $this->check     = getimagesize($this->file['image']['tmp_name']);
        
       if($this->check)
       {
           if(!file_exists($this->directory))
           {
                if($this->fileType == 'jpg' || $this->fileType == 'png' || $this->fileType == 'jpeg')
                {
                move_uploaded_file($_FILES['image']['tmp_name'], $this->directory);
                return [
                    'name' => $this->post['name'],
                    'image' => $this->directory
                ];
                }  
                else
                {
                    echo 'This file is not Exciteble. Please Enter the .jpg or .png File.';
                }
           }
           else{
               die('Sorry ! This File is allready Exists.');
           }
          
        
       }
       else
       {
           echo 'This File Not Picture. Please Enter the picture';
       }
    }
}