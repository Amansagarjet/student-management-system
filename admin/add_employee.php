<?php

require_once 'includes/base.php';
require_once 'navbar.php';
require_once 'includes/bootme.php';

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql = "INSERT INTO empl_details(name,phone,email,address,password,cpassword) VALUES ('$name','$phone','$email','$address','$password','$cpassword')";
    $res = mysqli_query($con,$sql);
    if($res == true){
        echo "Data Inserted Successfully";
        header('location:emp_details.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
        <meta name="generator" content="Jekyll v4.1.1">
        <title>Employee Register</title>
    </head>

    <body>

    <div class="row">
        <div class="col-md-4 col-lg-4">

        </div>
        <div class="col-md-4 col-lg-4">

        <div class="ml-3 py-3"><h1> Register Employee</h1></div>
        <div class="container">
            <form action="add_employee.php" method="POST" onclick="return validation()">
                <div class="form-group">
                    <label for="name">Enter Your Name</label>
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control" autofocus>
                    <span id="username" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label for="phone">Enter Your Phone</label>
                    <input type="phone" name="phone" id="phone" placeholder="Phone" class="form-control">
                    <span id="userphone" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label for="email">Enter Your Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                    <span id="userphone" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label for="address">Enter Your Address</label>
                    <input type="text" name="address" id="address" placeholder="Address" class="form-control">
                    <span id="useraddress" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label for="password">Create Your Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                    <span id="userpassword" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label for="cpassword">Again Your Password</label>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Re-Type Password" class="form-control">
                    <span id="userpasswords" class="text-danger"></span>
                </div>
                <br>
                <button class="btn btn-lg btn-primary rounded-0" type="submit" name="send">Register</button>

            </form>
        </div>

        </div>
        <div class="col-md-4 col-lg-4">

        </div>
    </div>
    <script>

function validation(){

    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var password = document.getElementById('password').value;
    var cpassword = document.getElementById('cpassword').value;

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

      // Validation For Password Field

    if(password == ""){
        document.getElementById('userpassword').innerHTML="Please Fill Password";
        return false;
    }
    if((password.length<4) || (password.length>25)){
        document.getElementById('userpassword').innerHTML = "Enter Atleast 4 Digit And Maximum 25"
        return false;
    }

    if(cpassword == ""){
        document.getElementById('userpasswords').innerHTML="Please Fill Password";
        return false;
    }
    if((cpassword.length<4) || (cpassword.length>25)){
        document.getElementById('userpasswords').innerHTML = "Enter Atleast 4 Digit Password And Maximum 25"
        return false;

    }

    if(password != cpassword){
        document.getElementById('userpasswords').innerHTML = "Password Not Matched"
        return false;
    }
}

</script>
    </body>

</html>