<?php 
require'includes/base.php';
session_start();
if($_SESSION['username'] == true){
}else{
    header('location:admin_login.php');
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

    <title>Employee Dashboard</title>
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
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
      <li class="nav-item">
      <a class="text-dark nav-link mx-4">Hii, <?php echo $_SESSION['username']; ?></a>
      </li>
        <li class="nav-item">
          <a class="nav-link active mx-4" aria-current="page" href="admin_logout.php">Admin Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active mx-4" aria-current="page" href="add_employee.php">Add Employee</a>
        </li>
      </ul>
      <form class="d-flex" method="POST" action="search.php">
        <input class="form-control me-2" type="search" name="search" placeholder="Search By Name" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- Body Start Here -->

<h1 class="text-center my-4">Welcome To Dashboard</h1>

<div class="row">
  <div class="col-md-3 col-lg-3">
      <center><a href="view.php"><img src="assets/img/view.png" alt="View Student image" style="height:250px;"></a></center>
  </div>
  <div class="col-md-3 col-lg-3">
  <center><a href="add_student.php"><img src="assets/img/add.jpg" alt="View Student image" style="height:250px;"></a></center>
  </div>
  <div class="col-md-3 col-lg-3">
  <center><a href="edit.php"><img src="assets/img/edit.png" alt="View Student image" style="height:250px;"></a></center>
  </div>
  <div class="col-md-3 col-lg-3">
  <center><a href="delete.php"><img src="assets/img/delete.png" alt="View Student image" style="height:250px;"></a></center>
  </div>
</div>
<br>
<!-- Buttons in Dashboard -->
<div class="row">
  <div class="col-md-3 col-lg-3">
      <a href="view.php"><center><button class="btn btn-primary" type="submit">Views All Students</button></center></a>
  </div>
  <div class="col-md-3 col-lg-3">
      <a href="add_student.php"><center><button class="btn btn-primary">Add Student</button></center></a>
  </div>
  <div class="col-md-3 col-lg-3">
      <a href="edit.php"><center><button class="btn btn-primary">Edit Student Details</button></center></a>
  </div>
  <div class="col-md-3 col-lg-3">
      <a href="delete.php"><center><button class="btn btn-primary">Delete Student Details</button></center></a>
  </div>
</div>
  </body>
</html>