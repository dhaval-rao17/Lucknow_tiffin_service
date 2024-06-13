<?php 
include('user_navigation.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin-top:100px;
            margin-left:250px;

        }
        .input{
            padding:20px 50px;
            width:50%;
            border-radius:4px;
            border:none;
            border-bottom:5px solid black;
            box-shadow: 0 0 5px 5px gray;
            font-family:verdana;

        }
        .button{
            width:50%;
            padding:10px 50px;
            border-radius:4px;
            border:none;
            border-bottom:5px solid black;
            box-shadow: 0 0 5px 5px gray;
            font-family:verdana;
            background-color:blue;


        }
    </style>
</head>
<body>
    <form action="">

    <input type="text" name='oid' placeholder="Enter Your Order Id" class="input">
    <br><br>
    <input type="submit" name='s' value='search'class="button">
    </form>
    
</body>
</html>
<?php
if(isset($_GET['s'])){
    $oid=$_GET['oid'];
    include 'dbcon.php';
    $s="select * from booking where order_id='$oid'";
    $q=mysqli_query($con,$s);

    if($r=mysqli_fetch_assoc($q)){
        $p=$r['pin'];

        if($p==0){
            echo 'order panding';
        }
        else{
            echo'Your order is confirm';
        }


    }
}
?>