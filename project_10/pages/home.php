
<?php include 'include/header.php';?>

<section class="py-5">
    <div class="container">
        
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card  border-success ">
                    <div class="card-header text-center">
                        <h3>Prime Number Problem.</h3>
                    </div>
                    <div class="card-body py-3">
                         <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Enter Your Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="given_number" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Your Number Is </label>
                                <div class="col-md-8">
                                    <input type="text" name="" value="<?php echo isset($result) ? $result : '' ; ?>" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-8"></label>
                                <div class="col-md-4">
                                    <input type="submit" name="btn" class="btn btn-outline-primary btn-block"/>
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