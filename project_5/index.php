<?php
require_once './vendor/autoload.php';

use App\classes\student;
use App\classes\Calculator;

$result = '';
if(isset($_POST['btn']))
{
    $std = new Student($_POST);
    $result = $std-> index();
}



$calResult = '';
if(isset($_POST['mainBtn']))
{
    $calculator = new Calculator($_POST);
    $calResult = $calculator -> index();
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PHP_CODE</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css"/>
</head>
<body>


<!--Name Fill Up Section Start-->

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center ">
                        <h3 >Please fill up the form</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="from-group row p-2">
                                <label class="col-from-label col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control " name="first_name"/>
                                </div>
                            </div>

                            <div class="from-group row p-2">
                                <label class="col-from-label col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="last_name"/>
                                </div>
                            </div> 
                            
                            <div class="from-group row p-2">
                                <label class="col-from-label col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" readonly value="<?php echo $result;?>"/>
                                </div>
                            </div> 

                            <div class="from-group row p-2">
                                <label class="col-from-label col-md-3"> </label>
                                <div class="col-md-9">
                                    <input type="submit"  class="btn btn-outline-success" value="Submit" name="btn" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Name Fill Up Section End-->




<!--New Section Start-->

<section>
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                           <h3> My Calculator</h3>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">First number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="first_namber"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Second number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="second_namber"/>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Action</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="action" value="+"/>Add</label>
                                        <label><input type="radio" name="action" value="-"/>Sub</label>
                                        <label><input type="radio" name="action" value="/"/>Div</label>
                                        <label><input type="radio" name="action" value="*"/>Mult</label>
                                        <label><input type="radio" name="action" value="%"/>Rem</label>                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <input type="text" readonly value="<?php echo $calResult; ?>" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="mainBtn" class="btn btn-outline-success btn-block" value="submit"/>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--New Section End-->




<script src="./assets/js/jquery-3.6.0.min.js"></script>
<script src="./assets/js/bootstrap.js"></script>
    
</body>
</html>

