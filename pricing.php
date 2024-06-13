<?php
include 'navigation.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:gray;
        }
        .div1{
            height:655px;
            width:45%;
            border:5px solid;
            display:inline-block;
            background-image:url('img/d6.webp');
            background-size:100%;
        }
        .table{
            height:350px;
            width:70%;
            font-family:fantasy;
            background:lightgreen;
            margin-top: 150px;
            margin-left: 5px;
            text-align:center;
            box-shadow: 0 5px 10px rgba(0,0,0,0.15);
            border-radius: 5px;

        }
        .btn{
            padding:20px 40px;
            background-color:green;
            color:white;
            border-radius:8px;
            font-size:20px;
        }
        
        </style>
</head>
<body><center>
    <div class="div1">
        
        <table class="table" border="5" cellpading="10" cellspacing="0" >
            <th colspan="2"> <h3>Rate List</h3></th>
            <tr>
                <th>Veg</th>
                <th>Non Veg</th>
            </tr>
            <tr>
                <td>Break Fast 200&#8377 </td>
                <td>Break Fast 250&#8377 </td>
            </tr>
            <tr>
                <td>Lunch 300&#8377</td>
                <td>Lunch 350&#8377</td>
            </tr>
            <tr>
                <td>Diner 300&#8377</td>
                <td>Diner 450&#8377</td>
            </tr>
        </table>
        <br><br>
        <a href="login.php"><button class="btn">Book Now</button></a>

    </div>
    </center>
</body>
</html>
<?php
include 'footer.php';
?>