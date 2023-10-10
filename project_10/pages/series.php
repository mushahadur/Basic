
<?php include 'include/header.php';?>

<section class="py-5">
    <div class="container">
        


        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card text-white border-primary bg-dark ">
                    <div class="card-header text-center">
                        <h3>Series Problem.</h3>
                    </div>
                    <div class="card-body py-3">
                         <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Enter Your Starting Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="starting_number" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Your Ending  Number</label>
                                <div class="col-md-8">
                                    <input type="text" name="ending_number" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Your Choices Is </label>
                                <div class="col-md-8">
                                    <label><input type="radio" name="choice" value="odd" />Odd</label>
                                    <label><input type="radio" name="choice" value="even" />Even</label>
                                    <label><input type="radio" name="choice" value="all" />All</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Result</label>
                                <div class="col-md-8">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-8"></label>
                                <div class="col-md-4">
                                    <input type="submit" name="btn1" class="btn btn-outline-primary btn-block"/>
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