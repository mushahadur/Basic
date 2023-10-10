<?php

require_once '../vendor/autoload.php';
use App\classes\WordCharacterCount;
use App\classes\Example;

/// Word Character Count ---**
$total_word      = '';
$total_charecter = '';

if(isset($_POST['btn']))
{
    $wordCharacterCount = new WordCharacterCount($_POST);
    $result = $wordCharacterCount->index();

    extract($result);


    // echo $total_word;
    // echo '<br>';
    // echo $total_charecter;


    // echo $result['total_word'];
    // echo '<br>';
    // echo $result['total_charecter'];

} 

/// Word Character Count ---**



if(isset($_POST['exmaple-btn']))
{
    $example = new Example($_POST);
    $result = $example->index();

    extract($result);
}

?>




<?php include './include/header.php';?>

<!-- Section Start -->


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
                                <label class="col-form-label col-md-4">Enter Your String</label>
                                
                                <div class="col-md-8">
                                    <input type="text" name="given_string" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Result</label>
                                
                                <div class="col-md-8">
                                    <textarea class="form-control"><?php echo "$total_word\n$total_charecter";?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4"><b>Submit</b></label>
                                
                                <div class="col-md-4">
                                    <input type="submit" name="exmaple-btn" class="btn btn-outline-success btn-block" value="Submit"/>
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