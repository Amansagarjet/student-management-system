<?php 


include'../includes/base.php';
include'../includes/bootme.php';
include'../navbar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Data</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">

            </div>
            <div class="col-md-4 col-lg-4">

<?php

// Value Fetching According To id

$id = $_GET['roll'];
$result = mysqli_query($con,"select * from student where roll={$id}");
$arr = mysqli_fetch_array($result);

// Update VAlue By id

 if(isset($_POST['update'])) {
    $ids = $_POST['roll'];    
    echo"id = .$ids";
     $name = $_POST['name'];
     $course = $_POST['course'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     // $files = $_FILES['file'];
    // //  Image Uploading Code Start Here 

    //  $filename = $files['name'];
    //  $file_error = $files['error'];
    //  $file_temp = $files['tmp_name'];

    //  // User Only Upload png,jpg,jpeg image Validation

    //  $fileext = explode('.', $filename);
    //  $filecheck = strtolower(end($fileext));
    //  $fileextstore = array('png', 'jpg', 'jpeg');

    //  if (in_array($filecheck, $fileextstore)) {
    //     $destination = 'assets/student_img/'.$filename;
    //      move_uploaded_file($file_temp, $destination);
     // ,photo='$destination'
       
         $sql = "update student set name='$name',course='$course',phone=$phone,email='$email',address='$address' where roll=$ids";
        $res = mysqli_query($con,$sql);
      
    } 
// }

?>
                <h1></h1>
                <form action="edit.php" method="POST" enctype="multipart/form-data">
                    <h2 class="text-center mt-3">Fill Student Details</h2>
                    <div class="form-group my-3">
                        <label for="name">Enter Student Name</label>
                        <input type="text" name="name" id="name" value="<?php echo $arr['name']; ?>" placeholder="Name" class="form-control" autofocus>
                        <input type="hidden" name="roll" id="roll" value="<?php echo $arr['roll']; ?>">
                        <span id="username" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="course">Enter Student Course</label>
                        <input type="text" name="course" id="course" value="<?php echo $arr['course']; ?>" placeholder="Course" class="form-control">
                        <span id="usercourse" class="text-danger"></span>
                    </div>
                    <div class="form-group my-3">
                        <label for="phone">Enter Phone Number</label>
                        <input type="phone" name="phone" id="phone" value="<?php echo $arr['phone']; ?>" placeholder="Phone" class="form-control">
                        <span id="userphone" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Enter Student Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $arr['email']; ?>" placeholder="Email" class="form-control">
                        <span id="useremail" class="text-danger"></span>
                    </div>
                    <div class="form-group my-3">
                        <label for="address">Enter Student Address</label>
                        <input type="text" name="address" id="address" value="<?php echo $arr['address']; ?>" placeholder="Address" class="form-control">
                        <span id="useraddress" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="file">Enter Student Photo</label>
                        <input type="file" name="file" id="file"  value="<?php echo $arr['photo']; ?>" class="form-control">
                        <div>Only Jpg Png Jpeg images Are Valid!</div>
                    </div>
                    <div class="my-3">
                        <input type="submit" type="button" name="update" id="update" value="Update">
                    </div>

                    

                </form>
            </div>
            <div class="col-md-4 col-lg-4">

            </div>
        </div>
    </div>




</body>
</html>
