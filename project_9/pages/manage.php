
<?php include 'include/header.php';?>

<section class="py-5">
    <div class="container">
        


        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>All Student Info Gose Here.</h3>
                    </div>
                    <div class="card-body ">
                        <table  class="table table-bordered">
                            <thead class="table-secondary">
                                <tr>

                                    <td scope="col">Student Name</td>
                                    <td scope="col">Email</td>
                                    <td scope="col">Mobile</td>
                                    <td scope="col">Image</td>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($students as $student) { ?>
                                <tr>

                                    <td> <?php echo $student['name']; ?></td>
                                    <td><?php echo $student['email']; ?></td>
                                    <td><?php echo $student['phone']; ?></td>
                                    <td>
                                        <img src="<?php echo $student['image']; ?>" alt="" height="100" width="150" />
                                    </td>
                                   
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>




<?php include 'include/footer.php';?>