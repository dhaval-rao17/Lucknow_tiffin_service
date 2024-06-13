<?php 
ob_start();
 include 'admin_navigation.php';
//  include 'external.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
        }
        td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(odd) {
  background-color: #dddddd;
}
.btn{
    margin-left:85%;
    height:40px;
    background:blue;
    color:white;
    border-radius:10px;
}
.bt{
    height:40px;
    background:red;
    color:white;
    border-radius:10px;
}
    </style>
</head>
<body >
    <br><br>
<div class=""><center>
<table class="" border="5">
    <thead>
	<tr><td colspan="8"class="text-left"><a href="add_delivery_boy.php"><button class="btn">Add Delivery Boy</button></a></td></tr>
	<tr><th>Name</th><th>Username</th><th>Contact</th><th>Email</th><th>Address</th><th>Image</th><th>Alote Area</th><th>Update</th><th>Delete</th>
	</tr>
    </thead>
    <tbody>
    <?php
    include 'dbcon.php';
        $qry="Select * from delivery_boy where allot='null'";
        $res=mysqli_query($con,$qry);
        
          while($row=mysqli_fetch_assoc($res)){
      
        $img=$row['img'];
        
        ?>
    <tr><td><?php echo $row['dname'] ?></td><td><?php echo $row['dusename'] ?></td><td><?php echo $row['con'] ?></td><td><?php echo $row['email'] ?></td><td><?php echo $row['address'] ?></td><td><?php echo "<img src='$img' height='100' width='100'>" ?></td>
    
    <td><form  method="get" ><button type='submit' name="sb" class='btn btn-sm btn-primary' value="<?php echo $row['dusename'] ?>">Allot </button></form></td>
    <td>
<form action="updatedelivery.php" method="get"><button type='submit' name='update'  class='btn btn-sm btn-info'>Update </button></form>
		</td>
<td>
<form action="d" method="get"><button type='submit' name='delete' value='' class='btn btn-sm btn-danger'>Delete </button></form>
		</td>
</tr>
    <?php
}
  

?>
    </tbody></table>
    <?php
    if(isset($_GET['sb'])){
    ?>
    <form><input type="hidden" class='form-control' name="serboy" value="<?php  echo $_GET['sb']?>"><br>
<select name="pinallot" class='form-control'>
    <?php
    echo $sql1="select pin from booking ";
    $q1=mysqli_query($con,$sql1);
    while($r1=mysqli_fetch_assoc($q1)){

    
    ?>
    <option value="<?php echo $r1['pin']?>"><?php echo $r1['pin']?></option>
    <?php } ?>
    </select>
    

    <input type="submit" name="update" class="btn btn-success">
    <?php 
    }
    if(isset($_GET['serboy'])){
        $serboy=$_GET['serboy'];
        $pin=$_GET['pinallot'];
        $s2="update delivery_boy set allot='$pin' where dusename='$serboy'";
        mysqli_query($con,$s2);
    }



?>
</form>

</center>
</body>
</html>