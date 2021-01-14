<?php

include'includes/base.php';
include'includes/bootme.php';
include'navbar.php';

$sql = "select * from empl_details";
$res = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="table-respnosive">
        <table class="table-borderd tabel-hover table-striped table text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Password</th>
                    <th>Confirm Password</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($arr = mysqli_fetch_array($res)) {   ?> 
                <tr>
                    <td><?php echo $arr['id'] ?></td>
                    <td><?php echo $arr['name'] ?></td>
                    <td><?php echo $arr['phone'] ?></td>
                    <td><?php echo $arr['email'] ?></td>
                    <td><?php echo $arr['address'] ?></td>
                    <td><?php echo $arr['password'] ?></td>
                    <td><?php echo $arr['cpassword'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
            
        </table>
    </div>
</body>
</html>