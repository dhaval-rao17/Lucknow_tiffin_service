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
<body>
    
<div class=""><center>
<table class="" border="5">
	<thead class="thead">
	<tr><th>Order Id</th><th>Username</th><th>Card Type</th><th>Card Holder Name</th><th>Amount</th>
	</tr>
    </thead>
    <tbody>
    <?php
        $qry="Select * from booking";
        $res=mysqli_query($con,$qry);
        if(!$res){
          die("Query Failed".mysqli_error());
        }
        else{
          while($row=mysqli_fetch_assoc($res)){
      
        
        
        ?>
        <tr><td><?php echo $row['order_id']?></td><td><?php echo $row['username']?></td><td><?php echo $row['ctype']?></td><td><?php echo $row['hname']?></td><td><?php echo $row['total']?></td></tr>
        <?php
}
  }

?>
    </tbody>
</body>
</html>