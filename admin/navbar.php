

<!-- Navbar Start Here -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: lightblue;">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin_dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">        
        <li class="nav-item">
          <a class="nav-link active mx-4" aria-current="page" href="admin_logout.php">Admin Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active mx-4" aria-current="page" href="../index.php">Employee Login</a>
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

