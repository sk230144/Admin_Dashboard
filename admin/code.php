<?php

session_start();
include('../config/dbcon.php');
include('../functions/myfunctions.php');

   if(isset($_POST['add_car_btn']))
   {
    $model = $_POST['model'];
    $number = $_POST['number'];
    $price = $_POST['price'];
    $capacity = $_POST['capacity'];

    $image = $_FILES['image']['name'];


    $path = "../uploads";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

   $cate_query = "INSERT INTO categories 
    (model,number,price,capacity,image)
    VALUES ('$model','$number','$price','$capacity','$filename')";

    $cate_query_run = mysqli_query($con,$cate_query);


    if( $cate_query_run)
 {

  move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
  redirect("add-car.php", "Successfully");


   } else {
    redirect("add-car.php", "Something went wrong");
  }


   }

   
   else if(isset($_POST['update_car_btn']))

   {
      $category_id = $_POST['category_id'];
      $model = $_POST['model'];
    $number = $_POST['number'];
    $price = $_POST['price'];
    $capacity = $_POST['capacity'];

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];


    if($new_image != "")
    {
      $update_filename = $new_image;
    } else{
      $update_filename = $old_image;
    }
    $path = "../uploads";
   $update_query = "UPDATE categories SET model='$model', number='$number', price='$price', capacity='$capacity',
   image='$filename' WHERE id='$category_id'  ";

   $update_query_run = mysqli_query($con,$update_query);


   if($update_query_run)
   {
      if($_FILES['image']['name'] != ""){
         move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$new_image);
         if(file_exists("../uploads/".$old_image))
         {
            unlink("../uploads/".$old_image);
         }
      }
      redirect("edit-category.php?id=$category_id", "Category Updated Successfully");
   }


   }


?>