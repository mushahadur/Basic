<?php

require_once '../vendor/autoload.php';
use App\classes\ExampleThree;

if(isset($_POST['btn']))
{
    $exampleThree = new ExampleThree($_POST);
    $result       = $exampleThree->index();
    extract($result);
    
}




?>


<?php include './include/header.php';?>


<!-- Section Start -->


<section class="py-5">
    <div class="container">
        <?php if(isset($_POST['btn'])) { ?>
            <div class="row mb-5">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <div class="text-center pb-3">
                            <h3>Show Your Input Data </h3>
                        </div>
                        <div class="table-responsive">
                            <table class ="table table-bordered ">
                                <thead>
                                    <tr class="text-center">
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-justify">
                                        <td><?php echo $name;?></td>
                                        <td><?php echo $email;?></td>
                                        <td><?php echo $phone;?></td>
                                    <td>
                                    <?php

                                        $i=1;
                                                foreach($subject as $item)
                                                {
                                                    echo $i++.' '.$item.'<br/>';
                                                }
                                            ?>
                                    </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>        
            </div>
        <?php } ?>
        
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header  text-center">
                        <h3>Please File the form carefully</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Student Name</label>
                                
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Email Address</label>
                                
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Phone Number</label>
                                
                                <div class="col-md-8">
                                    <input type="number" name="phone" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Subject Name</label>
                                
                                <div class="col-md-8">
                                    <label><input type="checkbox" name="subject[]" value="Bangla" />Bangla</label>
                                    <label><input type="checkbox" name="subject[]" value="English" />English</label>
                                    <label><input type="checkbox" name="subject[]" value="Math" /> Math</label>
                                    <label><input type="checkbox" name="subject[]" value="Physics" />Physics</label>
                                    <label><input type="checkbox" name="subject[]" value="Chemistry" />Chemistry</label>
                                    
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
