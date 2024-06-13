<?php 
include('dlv_navigation.php');
$user=$_SESSION['delivery'];
include('dbcon.php');
$sql="select * from delivery_boy where dusename='$user'";
$q=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($q)){
    $img=$r['img'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:url('img/dlv3.avif');
            background-size:100%;
            background-repeat:no-repeat;
        }
        .box1{
            height:450px;
            width:40%;
            
            position: absolute;
            left:250px;
            top:200px;
            background:rgba(0,0,0,.8);
            box-shadow:0 0 5px 5px;
            color:white;
            padding:2px 30px;
            font-size: 15px;
            line-height:30px;
        }
        .box1 .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.box1 .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
        .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
        form .user-details .input-box{
  margin-bottom: 5px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 1000;
  margin-bottom: 5px;
  color:black;
}
.user-details .input-box input{
  height: 40px;
  width: 100%;
  
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
   
 }
 form .button input{
   height: 100%;
   width: 50%;
   border-radius: 5px;
   border: none;
   color: #fff;
   margin-left:280px;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
    </style>
</head>
<body>
    <div class="box1">
    <div class="title">My Profile</div>
    <form action="#" method="POST">
        <div class="user-details">
        <div>
            <span class="details">Image</span>
            <?php echo "<img src='$img' height='100' width='100'>" ?>

          </div>
          <div class="input-box">
            
            <span class="details">Full Name</span>
            <input type="text" name="cname" value="<?php echo $r['dname']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="uname"  value="<?php echo $r['dusename']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" value="<?php echo $r['email']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" value="<?php echo $r['con']?>" required>
          </div>
          
          <div class="input-box">
            <span class="details">Aadhar</span>
            <input type="text" name="pincode" value="<?php echo $r['aadhar']?>" required>
          </div>
          <div class="input-box" id="extra">
            <span class="details">Full Address</span>
            <input type="text" name="address" value="<?php echo $r['address']?>" required>
          </div>
          
          
        </div>
        
        
      </form>
    

    </div>
</body>
</html>