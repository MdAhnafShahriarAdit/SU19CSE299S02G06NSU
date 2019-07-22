<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<<<<<<< Updated upstream
=======
    
>>>>>>> Stashed changes
</head>
<body style="background-color:  #FFFFFF">
	

<div class="container">

     <div class="header">
    <h2> NABANI </h2>
  </div> 

	
    <div class="header">
    	<h2>Sign Up Here</h2>
    </div>

<<<<<<< Updated upstream
<<<<<<< Updated upstream
    <form action="registration.php" method="post">
=======
=======
>>>>>>> Stashed changes
    <form action="registration.php"  method="post">
        <center><img src="img/l2.png" alt="#" class="l1"></center>

        <?php include('errors.php') ?>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    	
        <div class="input-group">
        	<label for="username">User Name : </label>
        	<input type="text" name="username" required>
        </div>

        <div class="input-group">
        	<label for="email">Email : </label>
        	<input type="text" name="email" required>
        </div>

         <div class="input-group" >
        	<label for="password">Password : </label>
        	<input type="password" name="password_1" required>
        </div>

         

         <div class="input-group">
        	<label for="password">Confirm Password : </label>
        	<input type="password" name="password_2" required>
        </div>

        <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Submit</button>
        </div>

<<<<<<< Updated upstream
=======
        <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Submit</button>
        </div>

>>>>>>> Stashed changes

        <p>Already a user <a href="login.php"><b>Log in</b></a></p>

    </form>

</div>


</body>
</html>