<?php
	$email=$_POST['email'];
	$name=$_POST['name'];
	$password=['password'];
	$errors = array();
	include('connection.php');
	if (isset($_POST['register']))
{
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  if (empty($name)) 
  { 
    array_push($errors, "Username is required"); 
  }
  if (empty($password)) 
  { 
    array_push($errors, "password is required"); 
  }
  if (empty($email)) 
  { 
    array_push($errors, "Email is required"); 
  }
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
  {
  }
  else 
  {
    array_push($errors, "email is not a valid email address"); 
  }
  $user_check_query1 = "SELECT * FROM login";
  $result1 = mysqli_query($con, $user_check_query1);
  //The mysqli_fetch_assoc() function fetches a result row as an associative array.
  $user1 = mysqli_fetch_assoc($result1);

  if(!($user1))
  {
  $user_check_query = "SELECT * FROM login WHERE name='$name' and email='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  //The mysqli_fetch_assoc() function fetches a result row as an associative array.
  $user = mysqli_fetch_assoc($result);
  if ($user)
  { 
    if ($user['name'] === $name) 
    {
      array_push($errors, "Username already exists");
    }
    if ($user['email'] === $email) 
    {
      array_push($errors, "email Id already exists");
    }
  }
  if (count($errors) == 0) 
  {
    $query = "INSERT INTO admin (email,name,password) 
          VALUES('$email', '$name', '$password')";
    mysqli_query($con, $query);
    header('location: index.html');
  }
    }
}
?>