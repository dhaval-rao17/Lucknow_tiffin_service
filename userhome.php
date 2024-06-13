<?php include('user_navigation.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:url('img/pf6.jpg');
            background-size:100%;
            background-repeat:no-repeat;
        }
        .box{
            height:500px;
            width:50%;
            
            position: absolute;
            left:500px;
            top:65px;
            background:rgba(0,0,0,.6);
            box-shadow:0 0 5px 5px;
            color:white;
            padding:20px 30px;
            font-size: 15px;
            line-height:30px;


        }
        .btn{
            padding:20px 40px;
            margin-left:300px;
            border-radius:20px;
            background-color:#3399ff;
            animation-name:ani;
            animation-duration:2s;



        }
        @keyframes ani{
            from{
                box-shadow:2px 2px 2px 2px,-2px -2px 2px 2px
            }
            to{box-shadow:5px 5px 5px 5px blue, -5px -5px -5px -5px }
        }

    </style>
</head>
<body>
    <div class="box">
    Tired of ordering in and eating out? Bored of the usual canteen’s food? Missing out on all the flavor and taste? Don’t worry, our delicious home cooked meal is a perfect go-to food for you! Order Tiffin Service in Lucknow today.

We bring to you Lucknowi Tiffin, India’s first-of-its kind homemade online tiffin service platform in Lucknow that delivers food right at your doorstep. Our food is cooked in a home kitchen with utmost care and love. A wholesome tasty meal prepared in a hygienic environment only to suit your taste buds every day. Because, eating tasty shouldn’t be tough! Order your customize tiffin service in Lucknow online now. You can also download our Application available on Play Store. You can activate and pause your meal once you are out of the city. Your money will not be lapsed like other do in this industry. Search Tiffin Service near me. STAY HEALTHY, STAY AHEAD.
<br><br><br><br><br><br><br>
<a href="book_order.php"><button class="btn">Book Now</button></a>

    </div>

    
</body>
</html>
