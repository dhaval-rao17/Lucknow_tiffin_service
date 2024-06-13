<?php
session_start();
$total= $_SESSION['total'];
$user=$_SESSION['username'];
$t=$_SESSION['nf'];
  $ft=$_SESSION['ft'];
  $cost=$_SESSION['cost'];
  $date=$_SESSION['date'];
  $nextdate=$_SESSION['nextdate'];
  $o_id=$_SESSION['oid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            height:350px;
            width:50%;
            padding:100px;
            position:relative;
            top:100px;
            left:400px;

        }
        .btn{
            position: relative;
            left:80%;
            top:50px;
            height:50px;
            width:100px;
            border:none;
            background:darkblue;
            color:white;
            border-radius:20px;
        }
    </style>
</head>
<body>
<a href="userhome.php"><button class="btn">Dashboard</button></a>
    <button class="btn" onclick="window.print()">Print</button>
    <center><h2>Lucknow tiffin Service</h2></center>
    <table border="5" cellpadding="10" cellspacing="0">
       <tr> <th colspan="2"><h1>Order Receipt</h1></th></tr>
<tr>
    <th>Order Id</th>
    <td><?php echo $o_id?></td>
</tr>
<tr>
<th>username</th>
<td><?php echo $user?></td>
</tr>

<tr>
<th>Booking Date</th>
<td><?php echo $date?></td>
</tr>
<tr>
<th>Booking End Date</th>
<td><?php echo $nextdate?></td>
</tr>
<tr>
<th>No.of Tiffin</th>
<td><?php echo $t?></td>
</tr>
<tr>
<th>Tiffin Type</th>
<td><?php echo $ft?></td>
</tr>
<tr>
<th>Total amount paid</th>
<td><?php echo $total?></td>
</tr>

    </table>

</body>
</html>