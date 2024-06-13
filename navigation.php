<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        *{
            margin:0;
        }
        .heade{
            background-color:black;
            padding:20px 40px 20px 10px;
            text-align:right;
        }
        .heade ul li{
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
        border-bottom:5px solid red;
    }
    .h3{
        color:green;
        display:inline;
        position:absolute;
        left:40px;
        font-family:verdana;
    }
    </style>
</head>
<body>
    <div class="heade">
        <h3 class="h3">Lucknow Tiffin Service</h3>
        <ul>
            <li><a href=""><i class="fa-solid fa-house"></i>Home</a></li>
            <li><a href="pricing.php"><i class="fa-solid fa-hand-holding-dollar"></i>Pricing</a></li>
            <li><a href="admin.php"><i class="fa-solid fa-user"></i>Admin Login</a></li>
            <li><a href="delivery.php"><i class="fa-solid fa-user"></i>Delivery Boy Login</a></li>
            <li><a href=""><i class="fa-solid fa-phone"></i>Contact Us</a></li>
            <li><a href="login.php"><i class="fa-solid fa-user"></i>User Login</a></li>
            <li><a href="rg.php">Registration</a></li>
        </ul>
    </div>
</body>
</html>