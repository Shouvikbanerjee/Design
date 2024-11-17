<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" >
    <link href="./css/custom.css" rel="stylesheet" >
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include_once "nav.php"; ?>  


<div class="card text-bg-dark">
  <img src="img/p2.jpeg" class="card-img" alt="..." height="300px">
  <div class="card-img-overlay">
    <h1 class="card-title h9">About Us</h1>
  </div>
</div>

<!-- about us section -->
<div id="ab1">
<div class="card mb-3" style="max-width:100%;">
  <div class="row g-0">
    <div class="col-md-4 ab1">
      <img src="img/T1.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body ab2">
        <h5 class="card-title">~About Us</h5>
        <h1 class="card-title">DesignX Overview</h1>
        <p class="card-text"> 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pulvinar eleifend leo. Aliquam lectus libero, molestie in vulputate eu,
      sollicitudin vel lectus. Duis ut nunc diam. Ut at quam leo. Phasellus placerat diam sed libero maximus,
      in consectetur metus aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pharetra at odio vitae condimentum.
      Quisque egestas vestibulum enim, id faucibus ligula. Phasellus rutrum nunc in neque ultricies efficitur.</p>
      <p class="card-text"> Phasellus risus ipsum, dictum sit 
      amet ornare id, posuere quis nisl. Nunc nec sagittis felis. Nam quis tellus libero. Nam vel tincidunt lorem, eget euismod ligula. Donec fermentum 
      imperdiet cursus. Pellentesque odio risus, ornare ultricies ipsum et, gravida molestie sapien.
      Vestibulum vel risus nec turpis convallis elementum. Ut eleifend dignissim quam egestas pharetra.</p>
      </div>
    </div>
  </div>
</div>
</div>

<!-- heritage section -->
<div id="ab2">
<div class="card mb-3" style="max-width:100%;">
  <div class="row g-0">
  <div class="col-md-7 ab3">
      <div class="card-body">
        <h5 class="card-title">~The Journey</h5>
        <h1 class="card-title">Our Heritage</h1>
        <p class="card-text">Phasellus risus ipsum, dictum sit 
      amet ornare id, posuere quis nisl. Nunc nec sagittis felis. Nam quis tellus libero. Nam vel tincidunt lorem, eget euismod ligula. Donec fermentum 
      imperdiet cursus. Pellentesque odio risus, ornare ultricies ipsum et, gravida molestie sapien.
      Vestibulum vel risus nec turpis convallis elementum. Ut eleifend dignissim quam egestas pharetra.</p>
      <button type="submit" class="btn btn-primary">Know More</button>
      </div>
    </div>
    <div class="col-md-4 ab4">
      <img src="img/p11.jpeg" class="img-fluid rounded-start" alt="...">
    </div>
  </div>
</div>
</div>


<!-- members section -->
<div id="ab3">
<p id="p1">Our members</p>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col p22 ">
    <div class="card h-100 ">
      <img src="img/m1.jpeg" class="card-img-top p44" alt="...">
      <div class="card-body ">
        <h4 class="card-title p33">Mr. Avik Roy</h4>
        <p class="card-text p33"> CEO of the Company</p>
      </div>
    </div>
  </div>
  <div class="col p22">
    <div class="card h-100 ">
      <img src="img/m5.jpeg" class="card-img-top p44" alt="...">
      <div class="card-body ">
        <h4 class="card-title p33">Ms. Susmita Ghosh</h4>
        <p class="card-text p33"> Manager of the Company</p>
      </div>
    </div>
  </div>
  <div class="col p22">
    <div class="card h-100">
      <img src="img/m4.jpeg" class="card-img-top p44" alt="...">
      <div class="card-body">
        <h4 class="card-title p33">Mr. Sanatan Das</h4>
        <p class="card-text p33"> CEO of the Company</p>
      </div>
    </div>
  </div>
</div>
</div>


<!-- acehievement section -->
<div id="ab4">
 <p id="p1">Our Achievement</p>
 <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-40 ">
      <img src="img/c1.jpeg" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="col">
    <div class="card h-40">
      <img src="img/c2.jpeg" class="card-img-top" alt="..."height="300px">
    </div>
  </div>
  <div class="col">
    <div class="card h-40">
      <img src="img/c3.jpeg" class="card-img-top" alt="..."height="300px">
    </div>
  </div>
</div>
</div>



<?php include_once "footer.php"; ?>  
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>