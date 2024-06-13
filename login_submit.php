<?php 
$uname=$_POST['uname'];
$u_pass=$_POST['password'];
include('dbcon.php');
$sql="select * from cus_reg where uname='$uname' and password='$u_pass'";

$qry=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($qry)){

    $db_uname=$row['uname'];
    $db_pass=$row['password'];

    session_start();
    $_SESSION['username']=$row['uname'];
   $_SESSION['pin'] =$row['pincode'];

    if($u_pass==$db_pass and $uname==$db_uname){
        header('location:userhome.php');
    }
    else{
        echo 'hello world';
    }


}



?>