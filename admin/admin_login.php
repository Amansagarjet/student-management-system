<?php 
session_start();
include'includes/base.php';
include'includes/bootme.php';



$success = false;
$msg = '';
$dialog_type = '';
if(isset($_REQUEST['submit'])){
    $username =  $_REQUEST['username'];
    $password =  $_REQUEST['password'];

    $query = mysqli_query($con,"SELECT * FROM admin where username = '$username' and password = '$password'");
    $num_rows = mysqli_num_rows($query);
    if($num_rows == true){
        header('location:admin_dashboard.php');
        $_SESSION['username'] = $username;
        $success = true;
        $msg = 'Login Successfully';
        $dialog_type = 'alert-alert-success';
    }else{
        $success = true;
        $msg = 'Login Failed! Try Again Later!';
        $dialog_type = 'alert-alert-danger';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
 <!-- Navbar Start Here -->

 <nav class="navbar navbar-expand-lg navbar-light" style="background-color: lightblue;">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin_dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item mx-4">
          <a class="nav-link active" aria-current="page" href="admin_login.php">Admin Login</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="../index.php">Employee Login</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


    <div class="container">
    <h1 class="text-center text-danger pt-4">Welcome To Student Management</h1>
       <div class="row">
            <div class="col-md-4 col-lg-4">

            </div>
            <div class="col-md-4 col-lg-4">
                <br><br>
            <form action="admin_login.php" method="POST">
                <h1 class="my-3">Login Here</h1>
                <div class="form-group">
                    <label for="username">Enter Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" class="form-control mt-2 mb-3" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Enter Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control mt-2 mb-3">
                </div>
                <button class="btn btn-primary rounded-0" type="submit" name="submit">Submit</button>
            </form>
            </div>
            <div class="col-md-4 col-lg-4">

            </div>
       </div>
        
      
        
    </div>
</body>
</html>