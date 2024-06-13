<?php 
include('navigation.php');
include ("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    </head>
<body>

  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name"placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="uname" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Pincode</span>
            <input type="text" name="pincode" placeholder="Enter Your Pincode" required>
          </div>
          <div class="input-box" id="extra">
            <span class="details">Full Address</span>
            <input type="text" name="address" placeholder="Enter Your Address" required>
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Register" name=save>
</div>
        
      </form>
    </div>
  </div>

</body>
</html>
<?php
if(isset($_POST['save'])){
  $n=$_POST['name'];
  $un=$_POST['uname'];
  $em=$_POST['email'];
  $ph=$_POST['phone'];
  $pass=$_POST['password'];
  $pin=$_POST['pincode'];
  $ad=$_POST['address'];

  include 'dbcon.php';
  $sql="insert into cus_reg values('$n','$un','$em','$ph','$pass','$pin','$ad')";
  mysqli_query($con,$sql);
 header('location:login.php?Registration Successfully');
}
?>