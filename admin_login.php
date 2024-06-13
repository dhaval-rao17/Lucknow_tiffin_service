<?php 
$uname=$_POST['username'];
$u_pass=$_POST['password'];
include('dbcon.php');
$sql="select * from admin_login where username='$uname' and password='$u_pass'";

$qry=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($qry)){

    $db_uname=$row['username'];
    $db_pass=$row['password'];

    session_start();
    $_SESSION['admin']=$row['username'];

    if($u_pass==$db_pass and $uname==$db_uname){
        header('location:adminhome.php');
    }
    else{
        echo 'hello world';
    }


}
?>