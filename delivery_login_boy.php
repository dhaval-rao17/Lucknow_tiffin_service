<?php 
$uname=$_POST['username'];
$u_pass=$_POST['password'];
include('dbcon.php');
$sql="select * from delivery_boy where dusename='$uname' and pass='$u_pass'";

$qry=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($qry)){

    $db_uname=$row['dusename'];
    $db_pass=$row['pass'];

    session_start();
    $_SESSION['delivery']=$row['dusename'];

    
    if($u_pass==$db_pass and $uname==$db_uname){
        header('location:deliveryhome.php');
    }
    else{
        echo 'hello world';
    }


}
?>