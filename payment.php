<?php
session_start();
$total= $_SESSION['total'];
$user=$_SESSION['username'];
$pin=$_SESSION['pin'];
$oid=$_SESSION['oid'];





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        .container{
  min-width: 600px;
  min-height:400px;
  width: 100%;
  margin-top: 80px;
  
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4 ); 
  
  padding: 2px 3px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  text-color:red;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
    </style>
</head>
<body>
    <div class="container">
    <div class="row">
	<div class="col-md-12 text-center">
		<h1>Payment Panel</h1>
	</div>
</div>
<div class="row">
	<div class="col-md-3"></div>
		<div class="col-md-6">
			<form class="p-4 mt-4" method="post">
			<div class="form-group form-inline">
				<label><b>Card Type</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Credit &nbsp;&nbsp;<input type="radio" name="ctype" value="credit">&nbsp;&nbsp;&nbsp;&nbsp;
Debit &nbsp;&nbsp;<input type="radio" name="ctype" value="debit">
<input type="hidden" name="aid" value="">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			</div>

<div class="form-group">
		<label><b>Card Number</b></label>
<input type="text" name="cno" placeholder="xxxx xxxx xxxx 1234" class="form-control">
</div>
<div class="form-group">
		<label><b>Name on Card</b></label>
<input type="text" name="cname" placeholder="RAM RAJ" class="form-control">
</div>
<div class="form-group form-inline">
		<label><b>Expiry</b> </label>&nbsp;&nbsp;&nbsp;
		<label>Month</label>&nbsp;&nbsp;<select name="expiry" class="form-control" style="width:135px">
			<option>1</option><option>2</option><option>3</option>
			<option>4</option><option>5</option><option>6</option>
			<option>7</option><option>8</option><option>9</option>
			<option>10</option><option>11</option><option>12</option>
		</select>&nbsp;&nbsp;&nbsp;
		<label>Year</label>&nbsp;&nbsp;<select name="expiry" class="form-control"  style="width:135px">
			<option>2019</option><option>2020</option><option>2021</option>
			<option>2022</option><option>2023</option><option>2024</option>
			<option>2025</option><option>2026</option><option>2027</option>
			<option>2028</option><option>2029</option><option>2030</option>
		</select>&nbsp;&nbsp;&nbsp;
<label><b>CVV</b></label>&nbsp;&nbsp;
<input type="text" name="cvv" placeholder="123" class="form-control"  style="width:125px">
</div>
<div><label><b>Payable Amount</b></label>&nbsp;&nbsp;&nbsp;
<input type="text" readonly class="form-control" style="width:170px" name="amount" value="<?php echo $total ?>"></div>
<br>
<div class="form-group">
<button class="btn btn-outline-primary btn-block" name="save" value=""type="submit">PAY</button>
</div>

			</form>
			</div>
		
			<div class="col-md-3"></div>
</div>
    </div>
    
</body>
</html>
<?php
include 'dbcon.php';
$sql="select * from booking where username='$user'";
$q=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($q)){
   $oid=$r['order_id'];
  
}

if(isset($_POST['save'])){
  $t=$_SESSION['nf'];
  $ft=$_SESSION['ft'];
  $cost=$_SESSION['cost'];
  $date=$_SESSION['date'];
  $nextdate=$_SESSION['nextdate'];

  $tp=$_POST['ctype'];
  $c=$_POST['cno'];
  $cn=$_POST['cname'];
  $e=$_POST['expiry'];
  $cvv=$_POST['cvv'];
  
$sql1="update booking set ctype='$tp',cardnumber='$c',hname='$cn',expiry='$e',cvv='$cvv',pin='$pin' where order_id='$oid'";
  $qry1=mysqli_query($con,$sql1);
 
  if($qry1){
     
     header('location:receipt.php?Payment Successfull');
}else{
  echo "error";
}
}
  

?>