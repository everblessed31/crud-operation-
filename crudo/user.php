<?php

require "db.php";

if(isset($_POST["submit"])){
  $name = $_POST["name"];  
  $email = $_POST["email"];  
  $mobile = $_POST["mobile"];  
  $password = md5($_POST["password"]);  

  $duplicate = mysqli_query($conn, "SELECT * FROM crud WHERE email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo "sorry this email allready exist";
  }else{
 $insert = mysqli_query($conn, "INSERT INTO crud (name, email,mobile,password) VALUES('$name', '$email', '$mobile', '$password')");

 if($insert){
    // echo "success";
    header('location:display.php');
 }else{
    echo "error";
 }
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
                <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile number" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>