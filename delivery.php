<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:url('img/dlv2.jpg');
            filter: blur(100%);
            -webkit-filter: blur(100%);
        }
        div{
            background-color: antiquewhite;
            height: 450px;
            width: 250px;
            border: 1px solid;
            margin-left: 100px;
            margin-top: 100px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 5px black,-5px -5px 5px 5px black;
        }
        .input{
            height: 30px;
            border-radius: 5px;
            width: 160px;
            animation: forwards;

        }
        img{
            border-radius: 50%;
        }
        .btn{
            height: 35px;
            width: 100px;
            background-color: blue;
            color: aliceblue;
            animation: forwards;
            animation-iteration-count: infinite;
            align-items: last baseline;
            animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
    </style>
</head>
<body><center>
    <div>
        <form action="delivery_login_boy.php" method="POST">
            <h1>Delivery Boy Login</h1>
            <img src="img/dlv1.jpg" height="200" width="200" alt="image" >
            <br>
            <input type="text" placeholder="username" name="username" class="input">
            <br><br>
            <input type="password" placeholder="password" name="password" class="input">
            <br><br>
            <input type="submit" name="" value="Login"class="btn">
        </form>
    </div>
    </center>
</body>
</html>




