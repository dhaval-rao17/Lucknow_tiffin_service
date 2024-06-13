<?php
session_start();
$cname=$_SESSION['admin'];
if($_SESSION['admin']==""){
    header("location:admin.php?Login First");
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
        <li><a href="userdetails.php">Users</a></li>
            <li><a href="delivery_boy_detail.php">Delivery Boy</a></li>
            <li><a href="show_transation.php">Show transition</a></li>
            <li><a href=""></a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>

    </div>
</body>
</html>