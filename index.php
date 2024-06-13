<?php include("navigation.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include"external.php"; ?>
<style type="text/css">
    .main{
        background-color:gray;
        background-size:100% 100%;
        padding:40px 20px;
        height: 550px;
        width:100%;
    }
</style>

</head>
<body>
    <div class="main">
    <div class="row" id="home">
	<div class="col-md-12">
   <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/s1.jpeg" class="d-block w-100" style="height:600px;">
        <div class="carousel-caption d-none d-md-block">
          <b><h5 class="text-success">........200&#8377.........</h5>
          <p class="text-danger">Veg Breakfast</p></b>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/nv1.webp" class="d-block w-100"style="height:600px;" >
        <div class="carousel-caption d-none d-md-block">
          <h5>......................</h5>
          <p>..................................................</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/s2.webp" class="d-block w-100" style="height:600px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>....................... </h5>
          <p>....................................................</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/nv2.jpg" class="d-block w-100" style="height:600px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>....................... </h5>
          <p>....................................................</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/v3.jpg" class="d-block w-100" style="height:600px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>....................... </h5>
          <p>....................................................</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/nv3.avif" class="d-block w-100" style="height:600px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>....................... </h5>
          <p>....................................................</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  </div>
</div>	

    </div>
    
</body>
</html>
<br><br><br><br>
<?php include("footer.php");?>