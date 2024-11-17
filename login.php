<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" >
    <link href="./css/custom.css" rel="stylesheet" >
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="o1">   
        <div id="o2">
            <h1>LOGIN FORM</h1>
        </div>
        <div class="container "> 
		    <div class="row o3">
			    <!-- <div class="col-3"></div> -->
			    <div class="col-6">
                <form action="connect.php" method="POST">
                     <div class="mb-3">
                           <label>User Name:</label> 
                           <input type="text" id="u_fname" name="u_fname" placeholder="Enter User name">
                     </div>
                     <div class="mb-3">
                           <label>Password:</label> 
                           <input type="password" id="u_fname" name="u_fname" placeholder="Enter the password"><br><br>
                     </div>  
                     <div class="mb-3 o4">
                       <button type="submit" class="btn btn-success" > SUBMIT</button>
                    </div>
                </form> 
			   </div>
		    </div>
        </div>
    </div>
</body>
</html>