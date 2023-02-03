<?php

require "db.php";
$id=$_GET['updateid'];
$select=mysqli_query($conn,"SELECT * FROM crud WHERE id=$id");
$row=mysqli_fetch_assoc($select);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST["submit"])){
  $name = $_POST["name"];  
  $email = $_POST["email"];  
  $mobile = $_POST["mobile"];  
  $password = md5($_POST["password"]);  

//   $duplicate = mysqli_query($conn, "SELECT * FROM crud WHERE email = '$email'");
//   if(mysqli_num_rows($duplicate) > 0){
//     echo "sorry this email already exist";
//   }else{
 $updated = mysqli_query($conn, "UPDATE crud set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id"); 


 if($updated){
    // echo "updated successfully";
    header('location:display.php');
 }else{
    echo "error";
 }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" autocomplete="off" value=<?php
                echo $name; ?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" autocomplete="off" value=<?php
                echo $email; ?>>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" autocomplete="off" value=<?php
                echo $mobile; ?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password"  autocomplete="off" value=<?php
                echo $password; ?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>