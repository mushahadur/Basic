
<?php include 'include/header.php';?>

<section class="py-5">
    <div class="container">
        


        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Please All the fill carefully .</h3>
                    </div>
                    <div class="card-body py-3">
                        
                            <?php if(isset($message)){ ?>
                                <h4 class="text-center text-success"><?php echo $message; ?> </h4>
                            <?php }?>

                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-form-group-label col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-group-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="text" name="email" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-group-label col-md-3">Phone</label>
                                <div class="col-md-9">
                                    <input type="number" name="phone" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-group-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control-file" />
                                </div>
                            </div>

                            
                            <div class="form-group row py-2">
                                <label class="col-form-label col-md-3">Submit</label>
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




<?php include 'include/footer.php';?>