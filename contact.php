<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" >
    <link href="./css/custom.css" rel="stylesheet" >
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include_once "nav.php"; ?> 
<p style="text-align:center;font-size:25px;padding-top:25px;font-family:cursive">CONTACT US</p>
<?php include_once "slide.php"; ?>  
<div class="container c1">
    <div class="row">
        <div class="col">
            <h2>Location</h2>
            <p>BANPAS KAMARPARA</p>
            <p>BHATAR WEST,PURBA BARDHAMAN</p>  
        </div>
       <div class="col">
           <h2>Contact details</h2>
           <p>Mob:********** </p>
            <p>E-mail:</p>
       </div>
       </div>
</div>
       <div id="second-container">
        <h2 class="text">GOOGLE MAPS</h2>
        <img src="img/capture.png" class="rounded mx-auto d-block" alt="..." height="200px">
        <!-- <div class="pic"><p><a href="https://www.google.com/maps/@23.3928981,87.8097964,17z?entry=ttu">
        </a></p></div> -->
       </div>
<div class="a1">
       <div class="container ">
       <p style="text-align:center;font-size:25px;padding-top:25px;font-family:cursive">Feedback</p>
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<!-- <form>
				  <div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Your Name</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				  </div>
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Your E-mail</label>
					<input type="password" class="form-control" id="exampleInputPassword1">
				  </div>
				  <div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div>
				  <button type="submit" class="btn btn-success">Submit</button>
				</form> -->
        <form>
				  <div class="mb-3">
					<input type="text" placeholder="Enter your name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				  </div>
				  <div class="mb-3">
					<input type="e-mail" placeholder="Enter your e-mail" class="form-control" id="exampleInputPassword1">
				  </div>
          <div class="mb-3">
					<input type="text" placeholder="Enter your feedback" class="form-control" id="exampleInputPassword1">
				  </div>
				  <div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div>
				  <button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
  <?php include_once "footer.php"; ?>  
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>