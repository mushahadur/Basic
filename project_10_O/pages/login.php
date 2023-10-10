
<?php include 'include/header.php';?>

<section class="py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card border-secondary  py-3">
                    <div class="card-header text-center">
                        <h3>Login Form</h3>
                    </div>

                    <div class="card-body">
                        <h4 class="text-center text-danger"><?php echo isset($message) ? $message : ''; ?></h4>
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-8"></label>
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-outline-dengers btn-info" name="loginBtn" value="Login"/>
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