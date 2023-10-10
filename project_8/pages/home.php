
<?php include 'include/header.php';?>

<section class="py-5">
    <div class="container">



        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Upload Your Image</h3>
                    </div>
                    <div class="card-body py-3">
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-form-group-label col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group row py-2">
                                <label class="col-form-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control-file"/>            
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

            <div class="col-md-6">
                <h2>View Images </h2>
                <div class="row">
                    <?php foreach ($result as $item) {?>
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-img py-3  border-0">
                                <img src="<?php echo $image; ?>" class="card-img top" alt="" style="height: 250px; width: 250px;">
                            </div>
                            <div class="card-footer border-0">
                                <h5><?php echo $name; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php } $result = ''; ?>
                </div>

            </div>
        </div>
    </div>

</section>




<?php include 'include/footer.php';?>