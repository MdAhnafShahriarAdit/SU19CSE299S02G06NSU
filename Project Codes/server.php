<?php 
session_start();

//initializing variables

  $username = "";
  $email = "";

  $errors = array();
  // connect to Data base

  $db = mysql_connect('localhost','root','','menstrualcycle') or die(could not connect to data base);


//Register users

  $username =mysql_real_escape_string($db, $_POST['username']);
  $email =mysql_real_escape_string($db, $_POST['email']);
  $password_1 =mysql_real_escape_string($db, $_POST['password_1']);
  $password_2 =mysql_real_escape_string($db, $_POST['password_2']);



  // form validation
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

  //check db for same user name

  $user_check_query = "SELECT *FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

  $results = mysql_query($db, $user_check_query);

  $user = mysql_fetch_assoc($result);

  if($user){

  	if ($user['username'] === $username){array_push($errors, "Username already exist");} 
  	if ($user['email'] === $email){array_push($errors, "Email already exist");} 
  }





























































 ?>