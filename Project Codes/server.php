<?php 
session_start();

//initializing variables

  $username = "";
  $email = "";

  $errors = array();
  // connect to Data base

<<<<<<< Updated upstream
  $db = mysql_connect('localhost','root','','menstrualcycle') or die("could not connect to data base");
=======
  $db = mysqli_connect('localhost','root','','menstrualcycle') or die("could not connect to data base");
>>>>>>> Stashed changes


//Register users 

  $username =mysqli_real_escape_string($db, $_POST['username']);
  $email =mysqli_real_escape_string($db, $_POST['email']);
  $password_1 =mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 =mysqli_real_escape_string($db, $_POST['password_2']);



  // form validation 
<<<<<<< Updated upstream
<<<<<<< Updated upstream
  if (empty($username)) {
  	array_push($errors, "Username is required")
  };
   if (empty($email)) {
  	array_push($errors, "Email is required")
  };
   if (empty($password_1)) {
  	array_push($errors, "Password is required")
  };


  if($password_1 != $password_2){
  	array_push($errors,"Passwords need to be the same")
  };
=======
   if (empty($username)) {array_push($errors, "Username is required")};
   if (empty($email)) {array_push($errors, "Email is required")};
   if (empty($password_1)) {array_push($errors, "Password is required")};
   if($password_1 != $password_2){array_push($errors,"Passwords need to be the same")};
>>>>>>> Stashed changes
=======
   if (empty($username)) {array_push($errors, "Username is required");}
   if (empty($email)) {array_push($errors, "Email is required");}
   if (empty($password_1)) {array_push($errors, "Password is required");}
   if($password_1 != $password_2){array_push($errors,"Passwords need to be the same");}
>>>>>>> Stashed changes

  //check db for same user name

  $user_check_query = "SELECT *FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

  $results = mysqli_query($db, $user_check_query);

  $user = mysqli_fetch_assoc($result);

  if($user){

  	if ($user['username'] === $username){array_push($errors, "Username already exist");} 
  	if ($user['email'] === $email){array_push($errors, "Email already exist");} 
  }

  //Register The user if no error

  if (count($errors)== 0) {
  	$password = md5($password_1);//this will encrypt the password
  	$query = "INSERT INTO user (User Name,Email,Password) VALUES ('$username', '$email' , 'password')";

  	mysqli_query($db,$query);
  	$_SESSION['username']=$username;
  	$_SESSION['success']= "You are now logged in";

  	header('location: index.php');
  }


 ?>