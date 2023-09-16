<?php
 include('includes/header.php');
 include('../middleware/adminmiddleware.php');
?>



  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Add Cars
                    </h4>
                    <div class="card-body">
                        <form action = "code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                            <label for="">Model Name</label>
                        <input type="text" name = "model" class="form-control">
                            </div>
                            <div class="col-md-6">
                            <label for="">Model Number</label>
                        <input type="number" name = "number" class="form-control">
                            </div>
                            <div class="col-md-6">
                            <label for="">Seat Capacity</label>
                        <input type="number" name = "capacity" class="form-control">
                            </div>
                            <div class="col-md-6">
                            <label for="">Rent per day</label>
                        <input type="number" name = "price" class="form-control">
                            </div>
                            <div class="col-md-6">
                            <label for="">Image</label>
                        <input type="file" name = "image" class="form-control">
                            </div>
                            <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name = "add_car_btn">Save</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>






<?php
include('includes/footer.php');
?>

