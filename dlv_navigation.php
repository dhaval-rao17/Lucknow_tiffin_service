<?php
session_start();

if($_SESSION['delivery']==""){
    header("location:delivery.php?Login First");
}
$cname=$_SESSION['delivery'];
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
        <li><a href="delivery_profile.php">Profile</a></li>
            <li><a href="dlv_change_pass1.php">Change Password</a></li>
            <li><a href="delivery_customer.php">Customer</a></li>
         
            <li><a href="logout.php">Logout</a></li>
        </ul>

    </div>
</body>
</html>