
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .div{
            background:url('img/pf5.jpg');
            background-size:100%;
            background-repeat:no-repeat;
            height:600px;
        }
        .log{
            background-color: #E78D06;
            height: 450px;
            width: 250px;
            border: 1px solid;
            margin-left: 100px;
            margin-top: 150px;
            border-radius: 10px;
            
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
<body class="div">
    <div ><center>
    <div class="log">
        <form action="login_submit.php" method="POST">
            <h1>Customer Login</h1>
            <img src="img/login.jpg" height="200" width="200" alt="image" >
            <br>
            <input type="text" placeholder="username" name="uname" class="input">
            <br><br>
            <input type="password" placeholder="password" name="password" class="input">
            <br><br>
            <input type="submit" name="" value="Login"class="btn">
        </form>
    </div>
    </center>
    </div>
</body>
</html>