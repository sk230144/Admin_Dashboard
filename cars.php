<?php  


include('includes/header.php');
include('functions/userfunctions.php');



?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1 class= text-center  >Cars on Rent</h1>
            <hr>
            <div class="row">
            <?php
              $categories = getAllActive("categories");

              if(mysqli_num_rows($categories) > 0)
              {
              foreach($categories as $item)
              {
                ?>
                <div class="col-md-3 mb-2">
                    <div class="card shadow">
                        <div class="card-body">
                            <img src="uploads/<?= $item['image']; ?>" alt="Img" class="w-100">
                        <h4 class=text-center><?= $item['model']; ?></h4>
                        <h6> Vehicle number: <?= $item['number']; ?></h6>
                        <h6>seating capacity:<?= $item['capacity']; ?></h6>
                        <h6>Rent per day: $<?= $item['price']; ?></h6>
                        <label for="numberSelect">Number of days to rent:</label>
                        <select id="numberSelect">
                        <option value="1">1</option>
                        <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                        <option value="10">10</option>
                        </select>
                        <a href="book.php" class="btn btn-primary">Book on Rent</a>
                        
                        </div>
                    </div>
                </div>
                <?php
              }
              }
              else{
                echo "No data present";
              }
            ?>

            </div>
            </div>
        </div>
    </div>
</div>
    


    <?php  include('includes/footer.php')        ?>