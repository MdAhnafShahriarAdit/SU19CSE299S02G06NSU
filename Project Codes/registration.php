<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
</head>
<body>
	

<div class="container">
	
    <div class="header">
    	<h2>Register</h2>
    </div>

    <form action="registration.php" method="post">
    	
        <div>
        	<label for="User Name">User Name :</label>
        	<input type="text" name="User Name">
        </div>

        <div>
        	<label for="Email">Email :</label>
        	<input type="text" name="Email">
        </div>

         <div>
        	<label for="Password">Password :</label>
        	<input type="password" name="password_1">
        </div>

         

         <div>
        	<label for="User Name">Confirm Password :</label>
        	<input type="password" name="password_2">
        </div>

        <button type="submit">Submit</button>

        <p>Already a user <a href="login.php"><b>Log in</b></a></p>

    </form>

</div>


</body>
</html>