<?php 

include'includes/base.php';
include'includes/bootme.php';
include'navbar.php';

if(isset($_POST['search'])){
  $search = $_POST['search'];
  $qry = "Select * from student where name='$search'";
  $res = mysqli_query($con,$qry);
  $arr = mysqli_fetch_array($res);
  if($arr!=true){
    ?>
    <script>
        alert("Matched Not Found!");
    </script>
    <?php
  }else{
      ?>
      <script>
        alert("Result Found!!");
        
    </script>
    <?php
  }
}

?>
<br>
<table class="table table-bordered table-hover table-strived table-responsive">
    <thead>
        <tr class="bg-dark text-white">
            <th>Roll Number</th>
            <th>Student Name</th>
            <th>Course</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>Address</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        <tr class="text-center">
            <td><?php echo $arr['roll']; ?></td>
            <td><?php echo $arr['name']; ?></td>
            <td><?php echo $arr['course']; ?></td>
            <td><?php echo $arr['phone']; ?></td>
            <td><?php echo $arr['email']; ?></td>
            <td><?php echo $arr['address']; ?></td>
            <td><img src="<?php echo $arr['photo']; ?>" height="100" width="100"></td>
        </tr>
    </tbody>
</table>