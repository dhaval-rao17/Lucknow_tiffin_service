<?php include 'admin_navigation.php';
  include 'dbcon.php';
  
    
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin-top:100px;
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
.thead{
    background-color:green;
}
    </style>
</head>
<body >
    
<div class=""><center>
<table class="" border="5">
	<thead class="thead">
	<tr><th>Name</th><th>Username</th><th>Email</th><th>Contact</th><th>Pin Code</th><th>Address</th><th colspan="2">Action</th>
	</tr>
    </thead>
    <tbody>
        <?php
        $qry="Select * from cus_reg";
        $res=mysqli_query($con,$qry);
        if(!$res){
          die("Query Failed".mysqli_error());
        }
        else{
          while($row=mysqli_fetch_assoc($res)){
      
        
        
        ?>
    <tr><td><?php echo $row['cname']?></td><td><?php echo $row['uname']?></td><td><?php echo $row['email']?></td><td><?php echo $row['phone']?></td><td><?php echo $row['pincode']?></td><td><?php echo $row['address']?></td><td><a href=""><button class="bt">Update</button></a></td><td><a href="admin_user_update.php?id=<?php echo $row['uname'] ?>"><button class="bt">Delete</button></a></td></tr>
    <?php
}
  }

?>
</tbody>
</table>

</center>
</body>

</html>