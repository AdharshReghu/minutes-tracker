<?php 
session_start(); 
include "connection.php";

if (isset($_POST['name']) && isset($_POST['password'])
    && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$password = validate($_POST['password']);

	$email = validate($_POST['email']);

	$user_data = 'email='. $email. '&name='. $name;


	if (empty($email)) {
		header("Location: register.html?error=email is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: register.html?error=Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: register.html?error=Name is required&$user_data");
	    exit();
	}


	else{

		// hashing the password


	    $sql = "SELECT * FROM login WHERE email='$email' ";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.html?error=The email already exist&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO login(email, password, name) VALUES('$email', '$password', '$name')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
           	 header("Location: index.html?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register.html?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.html");
	exit();
}