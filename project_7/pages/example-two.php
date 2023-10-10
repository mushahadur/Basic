<?php include 'include/header.php'; ?>

<!-- Section Start -->

<section>
    <div class="container py-5">
       <div class="row">
           <div class="col-md-10 mx-auto" >
               <div class="card">
                   <div class="card-header text-center">
                       <h3>Please Upload the File</h3>
                   </div>
                   <div class="card-body ">
                       <form  action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="row  form-group">
                                <label class="col-form-label col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class=" form-control"/>
                                </div>
                            </div>

                            <div class="row  form-group">
                                <label class="col-form-label col-md-4"> Image </label>
                                <div class="col-md-8">
                                    <input type="file" name="image"   class=" form-control-file"/>
                                </div>
                            </div>

                            <div class="row  form-group">
                                <label class="col-form-label col-md-4">Submit</label>
                                <div class="col-md-3">
                                    <input type="submit" name="btn1" class="btn btn-outline-success btn-block" value="Submit" />
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


<?php include 'include/footer.php'; ?>