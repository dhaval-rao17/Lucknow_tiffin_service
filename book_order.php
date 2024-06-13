<?php 
require("user_navigation.php");
$pin=$_SESSION['pin'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .div1{
            height:655px;
            width:45%;
            border:0px solid;
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
            margin-left: 100px;
            text-align:center;
            box-shadow: 0 5px 10px rgba(0,0,0,0.15);
            border-radius: 5px;

        }
        .div2{
            display:inline-block;
            background:lightgray;
            height:655px;
            width:55%;
            position:absolute;
            background-image:url('img/d1.jpg');
            background-size:100%;

        }
        .container{
            max-width: 600px;
            width: 100%;
            margin-top: 150px;
            margin-left: 100px;
            background-color:#aaa;
            padding: 25px 30px;
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0, 0.8); 
            color:white;
  
        }
        input[type=text] {
  width: 80%;
  padding: 9px 18px;
  margin: 6px 0;
  box-sizing: border-box;
}
        </style>
</head>
<body>
    <div class="div1">
        
        <table class="table" border="5" cellpading="10" cellspacing="0" >
            <th colspan="2"> <h3>Rate List</h3></th>
            <tr>
                <th>Veg</th>
                <th>Non Veg</th>
            </tr>
            <tr>
                <td>Break Fast 200  &#8377 </td>
                <td>Break Fast 250  &#8377 </td>
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

    </div>
    <div class="div2">
        <form action="book_order_submit.php" method="POST">
            <table class="container">
                <tr>
                    <th>Username</th>
                
                    <th><input type="text" name="uname" value="<?php echo $user?>" readonly></th>
                </tr>
                
                <tr>
                    <th>No. of Tiffin</th>
                
                    <th><input type="number" name="ntif"></th>
                </tr>
                
                <tr>
                    <th>Tiffin Type</th>
                
                    <th> 
                        Breakfast <input type="checkbox" name="tt[]" value="breakfast">
                        Diner <input type="checkbox" name="tt[]" value="dinner">
                        Lunch <input type="checkbox" name="tt[]" value="lunch">
                    </th>
                </tr>
                
                <tr>
                    <th>Food Type</th>
                
                    <th>Veg<input type="radio" name="foodtype" value="veg">
                        Non-Veg<input type="radio" name="foodtype" value="nonveg">
                    </th>
                </tr>
                
                <tr>
                    <th>No of days</th>
                
                    <th><input type="number" name="days" ></th>
                </tr>
                
                <tr>
                    <th>Date</th>
                
                    <th><input type="text" name="date" value="<?php echo date('d-m-y')?>" readonly></th>
                </tr>
                <tr>
                    <th><input type="submit" name="" value="Place Order" value="<?php $pin?>"></th>
                </tr>



            </table>
        </form>
        

    </div>
    
</body>
</html>
<?php include 'footer.php'?>