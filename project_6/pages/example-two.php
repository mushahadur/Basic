<?php

require_once '../vendor/autoload.php';
use App\classes\Example;

$result      = '';


if(isset($_POST['btn']))
{
    $example = new Example($_POST);
    $result = $example->index();


} 

?>




<?php include './include/header.php';?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header  text-center">
                        <h3>Please File the form carefully</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Starting Number </label>
                                
                                <div class="col-md-8">
                                    <input type="number" name="starting_number" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Ending Number </label>
                                
                                <div class="col-md-8">
                                    <input type="number" name="ending_number" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Result</label>
                                
                                <div class="col-md-8">
                                    <textarea class="form-control"><?php  echo $result;?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4"><b>Submit</b></label>
                                
                                <div class="col-md-4">
                                    <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Submit"/>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Section End -->



<?php include './include/footer.php';?>