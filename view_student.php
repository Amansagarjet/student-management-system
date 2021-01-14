<?php 

include'navbar.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Details</title>
</head>

<body>
    <h1 class="text-center my-4">All Students Details</h1>
    <br>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Roll Number</th>
                    <th>Student Name</th>
                    <th>Course</th>
                    <th>Phone Number</th>
                    <th>Email Address</th>
                    <th>Student Address</th>
                    <th>Photo</th>
                </tr>
            <tbody>
                <?php
                include 'includes/base.php';
                include 'includes/bootme.php';
                


                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $course = $_POST['course'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $files = $_FILES['file'];

                    // Image Uploading Code Start Here 

                    $filename = $files['name'];
                    $file_error = $files['error'];
                    $file_temp = $files['tmp_name'];

                    // User Only Upload png,jpg,jpeg image Validation

                    $fileext = explode('.', $filename);
                    $filecheck = strtolower(end($fileext));
                    $fileextstore = array('png', 'jpg', 'jpeg');

                    if (in_array($filecheck, $fileextstore)) {
                        $destination = 'assets/student_img/' . $filename;
                        move_uploaded_file($file_temp, $destination);

                        $sql = "INSERT INTO student(name,course,phone,email,address,photo) VALUES ('$name','$course','$phone','$email','$address','$destination')";
                        $res = mysqli_query($con, $sql);

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
                    <td><img src=" <?php echo $result['photo']; ?>" height="100" width="100"></td>
                </tr>
                <?php
                        }
                        exit;
                    }
                }
                
                ?>
   </tbody>
            </thead>
        </table>
    </div>             
</body>

</html>