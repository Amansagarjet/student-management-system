<?php
session_start();
    include'includes/base.php';

    $success = false;
    $msg = "";
    $dialog_type = "";
    if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['name'];
        $userpassword = $_REQUEST['password'];

        $sql = mysqli_query($con, "SELECT * from empl_details where name='$username' AND password='$userpassword'");
        $row_count = mysqli_num_rows($sql);

        if($row_count == true){
            header('location:dashboard.php');
            $_SESSION['user'] = $username;
            $success = true;
            $msg = "Login Successfully";
            $dialog_type = "alert-alert-success";
        }else{
            $success = true;
            $msg = "Login Failed! Please Try Again";
            $dialog_type = "alert-alert-danger";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Employee Login</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <!-- Navbar Start Here -->

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: lightblue;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item mx-4">
          <a class="nav-link active" aria-current="page" href="admin/admin_login.php">Admin Login</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="emp_signup.php">Employee Register</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

    <!-- Login Form Start Here -->
    <h1 class="text-center text-danger pt-4">Welcome To Student Management</h1>
    <div class="row">
        <div class="col-md-4 col-lg-4">

        </div>
        <div class="col-md-4 col-lg-4">
            <br><br><br>
            <h1 class="">Employee Login Here</h1>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group my-4">
            <label for="name">Enter Your Name</label>
            <input type="text" name="name" id="name" placeholder="Name" class="form-control" autofocus>
        </div>
        <div class="form-group">
            <label for="password">Enter Your Password</label>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
        </div>
        <button class="btn btn-primary rounded-0 mt-4" type="submit" name="submit">Login</button>

    </form>
        </div>
        <div class="col-md-4 col-lg-4">

        </div>
    </div>

    
  </body>
</html>