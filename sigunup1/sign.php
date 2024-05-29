<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $check_query = "SELECT * FROM registration WHERE username = '$username'";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        
        echo "Username '$username' already exists. Please choose a different username.";
    } else {
        
        $sql = "INSERT INTO registration (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "Signup successfully";
            header('location:login.php');
        } else {
          
            die(mysqli_connect_error());
        }
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

    <title>signup page</title>
  </head>
  <body>
    <h1 class="text-center">Signup page</h1>
   <div class="container">
   <form action="sign.php" method="post">
   <div class="form-group">
    <label for="exampleInputusername" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your Username" name="username">
   
  </div><br>
  <div class="form-group">
    <label for="exampleInputpassword" class="form-label">password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password">
   
  </div><br>
    <div>
       <button type="submit" class="btn btn-primary w-100">signup</button>
    </div><br>
 
</form>
   </div>
    

   
  </body>
</html>