<?php include 'admin_navigation.php';
 ob_start();
 $_SESSION['admin'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        .box1{
            height:500px;
            width:40%;
            
            position: absolute;
            left:400px;
            top:150px;
            background:rgba(0,0,0,.2);
            box-shadow:0 0 5px 5px;
            color:#FDEBD0;
            padding:2px 30px;
            font-size: 15px;
            line-height:30px;
        }
        .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
  color:black;
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
    <div class="title">Add Delivery Boy</div>
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="dname" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="uname"  value="" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" value="" required>
          </div>
          
          
          <div class="input-box">
            <span class="details">Aadhar No.</span>
            <input type="text" name="aadhar" value="" required>
          </div>
          <div class="input-box" id="extra">
            <span class="details">Full Address</span>
            <input type="text" name="address" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Image</span>
            <input type="file" id="myFile" name="p">
          </div>
        </div>
        
        <div class="button">
          <input type="submit" value="Submit" name=save>
</div>
        
      </form>
    

    </div>

</body>
</html>
<?php
if(isset($_POST['save'])){
  $n=$_POST['dname'];
  $un=$_POST['uname'];
  $pass=$_POST['password'];
  $ph=$_POST['phone'];
  $em=$_POST['email'];
  

  $adh=$_POST['aadhar'];
  $ad=$_POST['address'];
  $file_name=$_FILES['p']['name'];
  $tm_name=$_FILES['p']['tmp_name'];

  $folder="uploadimage/". $file_name;
  move_uploaded_file($tm_name,$folder);


  include 'dbcon.php';
  $sql="insert into delivery_boy values('$n','$un','$pass','$ph','$em','$adh','$ad','$folder','null')";
  mysqli_query($con,$sql);
 header('location:delivery_boy_detail.php');
}
?>