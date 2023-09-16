<?php 
 session_start();
 if(isset($_SESSION['auth']))
 {
    $_SESSION['message'] = "You are already logged in";
    header('Location: index.php');
    exit();
 }
 include('includes/header.php')  
?>

  for login as car agency use email = risabht043@gmail.com   password = 123         ****            &&
  for login as user use email = test@gmail.com   password = 1234

   
    <div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                    <h4>Login</h4>
                    </div>
                    <div class="card-body">

                    <form action="functions/authcode.php" method="POST">






                    <div class="mb-3">
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Your Email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Your Password" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
  </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>


    <?php  include('includes/footer.php')        ?>