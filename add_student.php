<?php

include'includes/bootme.php';
include'navbar.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">

            </div>
            <div class="col-md-4 col-lg-4">
                <form action="view_student.php" method="POST" enctype="multipart/form-data" onclick="return validation()">
                    <h2 class="text-center mt-3">Fill Student Details</h2>
                    <div class="form-group my-3">
                        <label for="name">Enter Student Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" autofocus>
                        <span id="username" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="course">Enter Student Course</label>
                        <input type="text" name="course" id="course" placeholder="Course" class="form-control">
                        <span id="usercourse" class="text-danger"></span>
                    </div>
                    <div class="form-group my-3">
                        <label for="phone">Enter Phone Number</label>
                        <input type="phone" name="phone" id="phone" placeholder="Phone" class="form-control">
                        <span id="userphone" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Enter Student Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        <span id="useremail" class="text-danger"></span>
                    </div>
                    <div class="form-group my-3">
                        <label for="address">Enter Student Address</label>
                        <input type="text" name="address" id="address" placeholder="Address" class="form-control">
                        <span id="useradress" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="file">Enter Student Photo</label>
                        <input type="file" name="file" id="file" class="form-control">
                        <div>Only Jpg Png Jpeg images Are Valid!</div>
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary rounded-0" type="submit" name="submit">Submit</button>
                    </div>
                    
                </form>
            </div>
            <div class="col-md-4 col-lg-4">

            </div>
        </div>
    </div>

    <script>

function validation(){

    var name = document.getElementById('name').value;
    var course = document.getElementById('course').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    

    // Validation For Name Field

    if(name == ""){
        document.getElementById('username').innerHTML="Please Fill Name";
        return false;
    }
    
    if((name.length<3) || (name.length>25)){
        document.getElementById('username').innerHTML = "Enter Atleast 3 Digit And Maximum 25"
        return false;
    }
    
    if(!isNaN(name)){
        document.getElementById('username').innerHTML = "Please Fill Only Alphabets"
        return false;
    }

    // Validation For Course Field

    if(course == ""){
        document.getElementById('usercourse').innerHTML="Please Fill Course";
        return false;
    }
    
    if((course.length<3) || (name.length>25)){
        document.getElementById('usercourse').innerHTML = "Enter Atleast 3 Digit And Maximum 25"
        return false;
    }
    
    if(!isNaN(course)){
        document.getElementById('usercourse').innerHTML = "Please Fill Only Alphabets"
        return false;
    }

    // Validation For Phone Field

    if(phone==""){
        document.getElementById('userphone').innerHTML="Please fill contact number";
        return false;
    }
    if(phone.length!=10){
        document.getElementById('userphone').innerHTML="Only 10 digits are allowed";
        return false;
    }
    if(isNaN(phone)){
        document.getElementById('userphone').innerHTML="Only digits are allowed";
        return false;
    }

    // Validation For Email Field

    if(email==""){
        document.getElementById('useremail').innerHTML="Please fill email";
        return false;
    }

    if(email.indexOf('@') <= 0){
        document.getElementById('useremail').innerHTML = "invalid email";
        return false;
    }

    if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
        document.getElementById('useremail').innerHTML = "invalid email";
        return false;
    }

    // Validation For Address Field

    if(address==""){
        document.getElementById('useraddress').innerHTML="Please fill address";
        return false;
    }

    if(!isNaN(address)){
        document.getElementById('useraddress').innerHTML="Please fill address";
        return false;
    }

    if((address.length < 3 || address.length > 25)){
        document.getElementById('useraddress').innerHTML = "Minimum 3 and maximum 25 characters are allowed";
        return false;
     }
}

</script>

</body>
</html>
