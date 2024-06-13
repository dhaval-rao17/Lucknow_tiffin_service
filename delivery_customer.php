<?php
include 'dlv_navigation.php';
$user=$_SESSION['delivery'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        .container{
            height:400px;
            width: 50%;
            
            position: absolute;
            left: 585px;
            top:100px;
            padding:40px 70px;
            
            background-image:url(img/p1.jpg);
            background-size:100% 100%;

        }
        .container2{

            height:300px;
            width: 40%;
            border:1px solid black;
            background-color:yellow ;
            
        }
        table tr th {
            height:50px;
            border:2px solid black;
            width: 40%;
        }

    </style>
</head>
<body>
    
    <?php
    include'dbcon.php';
    $a='null';
    $sql="select * from delivery_boy where dusename='$user'";
$q=mysqli_query($con,$sql);
 
if($r=mysqli_fetch_assoc($q)){
 $a=$r['allot'];

}
    ?>
    <div class="container2">
        <h1 style="margin-left:20%; margin-top:5%;">Allot Pincode</h1>
        <h1 style="margin-left:20%; margin-top:5%;"><?php echo $a  ?></h1>


    </div>
    <div class="container">
    <table cellspacing="0",cellpading="5">
        <tr>
        
            <th>Name</th>
            <th>Username</th>
            <th>Address</th>
            <th><button>More Details</button></th>
            </tr>
            
            <?php
            include 'dbcon.php';
            
        $qry="Select * from cus_reg where pincode='$a'";
        $res=mysqli_query($con,$qry);
    
        if($res){
          
          while($row=mysqli_fetch_assoc($res)){
            
        
        
        ?>
        <tr>
            <th><?php echo $row['cname']?></th>
            <th><?php echo $row['uname']?></th>
            <th><?php echo $row['address']?></th>
        
        
        <?php 
        }
        }
            ?>
            </tr>

    </table>
    </div>
</body>
</html>