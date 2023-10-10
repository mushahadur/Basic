
<?php include 'include/header.php';?>


<section class="py-5 ">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card  border-success ">
                    <div class="card-header text-center">
                        <h3>Login Form</h3>
                    </div>
                    <div class="card-body ">
                        <h4 class="text-center text-danger"><?php echo  isset($message) ?  $message: ''; ?></h4>
                         <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Password</label>
                                <div class="col-md-8">
                                    <input type="text" name="password" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-8"></label>
                                <div class="col-md-4">
                                    <input type="submit" name="loginBtn" class="btn btn-outline-primary btn-block" value="Login"/>
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