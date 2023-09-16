<?php
 include('includes/header.php');
 include('../middleware/adminmiddleware.php');
?>



  <div class="container">
    <div class="row">
        <div class="col-md-12">
        
        <div class="card">
            <div class="card-header">
              <h4>Categories</h4>  
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                       <thead>
                        <tr>
                        <th>ID</th>
                        <th>Model Name</th>
                        <th>Model Number</th>
                        <th>Capacity</th>
                        <th>Rent Price in Dollars</th>
                        <th>Image</th>
                        <th>Edit</th>
                        </tr>
                       </thead>
                       <tbody>
                        <?php

                         $category = getAll("categories");

                         if(mysqli_num_rows($category) > 0)
                         {
                            foreach($category as $item)
                            {
                                ?>
                                <tr>
                                <td scope="col"><?= $item['id'];  ?></td>
                                <td scope="col"><?= $item['model'];  ?></td>
                                <td scope="col"><?= $item['number'];  ?></td>
                                <td scope="col"><?= $item['capacity'];  ?></td>
                                <td scope="col"><?=  $item['price'];  ?></td>
                                <td>
                                    <img src="../uploads/<?= $item['image'];  ?>" alt="<?= $item['model'];  ?>">
                                </td>



                                <td>
                                  <a href="edit-category.php?id=<?= $item['id'];  ?>" class="btn btn-primary">Edit</a>

                                </td>
                            </tr>
                            <?php
                            }
                             
                         }
                         else{
                            echo "No record found";
                         }

                        ?>
                       </tbody>
                </table>
            </div>
        </div>
            
        </div>
    </div>
  </div>






<?php
include('includes/footer.php');
?>

