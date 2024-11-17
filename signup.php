<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" >
    <link href="./css/custom.css" rel="stylesheet" >
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div id="o1">   
        <div id="o2">
            <h1>SIGN UP</h1>
        </div>
        <div class="container "> 
		    <div class="row o3">
			    <!-- <div class="col-3"></div> -->
			    <div class="col-6">
                <form action="connect.php" method="POST">
                     <div class="mb-3">
                           <label>Name:</label> 
                           <input type="text" id="u_name" name="u_name" placeholder="Enter your name">
                     </div>
                     <div class="mb-3">
                           <label>User Name:</label> 
                           <input type="text" id="u_fname" name="u_fname" placeholder="Enter your user name">
                     </div>
                     <div class="mb-3">
                           <label>E-mail:</label> 
                           <input type="E-mail" id="u_mail" name="u_mail" placeholder="Enter your E-mail">
                     </div>
                     <div class="mb-3">
                           <label>Phone number:</label> 
                           <input type="text" id="u_no" name="u_no" placeholder="Enter your number">
                     </div>
                     <div class="mb-3">
                           <label>Password:</label> 
                           <input type="password" id="u_pass" name="u_pass" placeholder="Enter the password"><br><br>
                     </div>  
                     <div class="mb-3 o6">
                       <button type="submit" class="btn btn-success" > SUBMIT</button>
                    </div>
                    <p>Already have an account?<a href="login.php" style="text-decoration:none">Log in</a></p>
                </form> 
			   </div>
		    </div>
        </div>
    </div>
</body>
</html>