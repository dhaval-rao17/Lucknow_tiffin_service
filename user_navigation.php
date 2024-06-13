<?php
session_start();

if($_SESSION['username']== ""){
    header("location:login.php?Login First");
}
$user=$_SESSION['username'];
$pin=$_SESSION['pin'];
include('dbcon.php');
$sql="select * from cus_reg where uname='$user'";
$q=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($q)){
    $cname=$r['cname'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;

        }
        .nav{
            background-color:green;
            padding:20px 40px 20px 10px;
            text-align:right;
        }
        .nav ul li{
            display:inline;
        }
        ul li a{
            text-decoration:none;
            color:white;
            font-family:verdana;
            padding:10px 15px;
            
            transition:all,2s;
        }
    ul li a:hover{
        border-bottom:5px solid blue;
    }
    .h3{
        color:black;
        display:inline;
        position:absolute;
        left:10px;
        font-family:verdana;
    }
    </style>
</head>
<body>
    <div class="nav">
        <h3 class='h3'>Lucknow Tiffin Service  <b>[ Welcome <i style="color:orange"> <?php echo $cname ?></i>]</b></h3>
        <ul>
            <h1>
        <li><a href="userhome.php">Home</a></li>
            <li><a href="userprofile.php">Profile</a></li>
            <li><a href="book_order.php">Book Order</a></li>
            <li><a href="order_status.php">Order Status</a></li>
            <li><a href="logout.php">Logout</a></li>
            </h1>
        </ul>

    </div>
</body>
</html>