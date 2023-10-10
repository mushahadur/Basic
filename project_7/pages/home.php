<?php include 'include/header.php'; ?>

<!-- Section Start -->

<section>
    <div class=" container py-5">
       <div class="row">
           <div class="col-md-10f mx-auto" >
               <div class="card">
                   <div class="card-header text-center">
                       <h3>Auto Generated Password</h3>
                   </div>
                   <div class="card-body ">
                       <form action="action.php" method="POST">
                            <div class="row  form-group">
                                <label class="col-form-label col-md-4">Enter Your Password Length</label>
                                <div class="col-md-8">
                                    <input type="number" name="given_length" class=" form-control"/>
                                </div>
                            </div>

                            <div class="row  form-group">
                                <label class="col-form-label col-md-4"> Your Password </label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo isset($result)? $result:'' ?>"   class=" form-control"/>
                                </div>
                            </div>

                            <div class="row  form-group">
                                <label class="col-form-label col-md-4">Submit</label>
                                <div class="col-md-3">
                                    <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Submit" />
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