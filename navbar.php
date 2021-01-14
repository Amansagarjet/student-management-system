

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
          <a class="nav-link active mx-4" aria-current="page" href="admin/admin_login.php">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active mx-4" aria-current="page" href="emp_logout.php">Employee Logout</a>
        </li>
      </ul>
      <form class="d-flex" method="POST" action="search.php">
        <input class="form-control me-2" type="search" name="search" placeholder="Search By Name" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>