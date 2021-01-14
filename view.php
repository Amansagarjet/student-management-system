<?php 

include'includes/base.php';
include'includes/bootme.php';
include'navbar.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <table class="table table-hover table-striped table-bordered text-center my-3">
        <tr class="bg-dark text-white">
            <th>Roll No</th>
            <th>Student Name</th>
            <th>Course</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>Student Address</th>
            <th>Image</th>
        </tr>
        <tbody>
            <?php 
            
            $sql = "SELECT * from student";
            $qry = mysqli_query($con, $sql);

            while ($result = mysqli_fetch_array($qry)) {  ?>
            
            <tr>
                <td><?php echo $result['roll']; ?></td>
                <td><?php echo $result['name']; ?></td>
                <td><?php echo $result['course']; ?></td>
                <td><?php echo $result['phone']; ?></td>
                <td><?php echo $result['email']; ?></td>
                <td><?php echo $result['address']; ?></td>
                <td><img src="<?php echo $result['photo']; ?>" height="100" width="100"></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>