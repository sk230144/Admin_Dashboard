<?php
 include('includes/header.php');
 include('../middleware/adminmiddleware.php');
?>



  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
               if(isset($_GET['id']))
               {
                $id = $_GET["id"];
               $category =  getByID('categories', $id);
               if(mysqli_num_rows($category)>0)
               {

                  $data = mysqli_fetch_array($category);
                ?>
                 <div class="card">
                <div class="card-header">
                    <h4>
                        Edit Cars
                    </h4>
                    <div class="card-body">
                        <form action = "code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" name = "category_id" value="<?= $data['id'] ?>">
                            <label for="">Model Name</label>
                        <input type="text" name = "model" value="<?= $data['model'] ?>"  class="form-control">
                            </div>
                            <div class="col-md-6">
                            <label for="">Model Number</label>
                        <input type="number" name = "number" value="<?= $data['number'] ?>" class="form-control">
                            </div>
                            <div class="col-md-6">
                            <label for="">Seat Capacity</label>
                        <input type="number" name = "capacity" value="<?= $data['capacity'] ?>" class="form-control">
                            </div>
                            <div class="col-md-6">
                            <label for="">Rent per day</label>
                        <input type="number" name = "price" value="<?= $data['price'] ?>" class="form-control">
                            </div>
                            <div class="col-md-6">
                            <label for="">Image</label>
                        <input type="file" name = "image" class="form-control">
                        <label for="">Current Image</label>
                        <input type="hidden" name="old_image" value="<?= $data['image'] ?>" >
                        <img src="../uploads/<?= $data['image'] ?>" alt="" height="150px" width="150px">
                            </div>
                            <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name = "update_car_btn">Update</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
                <?php
               }
               else{
                echo "category not found";
               }
               }
               else {
                echo "Something Went Wrong  from url";
               }
            ?>
            
        </div>
    </div>
  </div>






<?php
include('includes/footer.php');
?>

