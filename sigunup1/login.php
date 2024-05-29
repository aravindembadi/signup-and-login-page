<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $check_query = "SELECT * FROM registration WHERE username = '$username' and password='$password'";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        
        echo "login successfully";
        session_start();
        $_SESSION['username']=$username;
        header('location:home.php');
    } else {
        
        echo "invaild";

      
    }
}
?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>login page</title>
  </head>
  <body>
    <h1 class="text-center">login to our website</h1>
   <div class="container">
   <form action="login.php" method="post">
   <div class="form-group">
    <label for="exampleInputusername" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your Username" name="username">
   
  </div><br>
  <div class="form-group">
    <label for="exampleInputpassword" class="form-label">password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password">
   
  </div><br>
    <div>
       <button type="submit" class="btn btn-primary w-100">login</button>
    </div><br>
 
</form>
   </div>
    

   
  </body>
</html>