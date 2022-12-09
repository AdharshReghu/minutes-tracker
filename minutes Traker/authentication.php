<?php      
    include('connection.php');  
    $emailid = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $emailid = stripcslashes($emailid);  
        $password = stripcslashes($password);  
        $emailid = mysqli_real_escape_string($con, $emailid);  
        $password = mysqli_real_escape_string($con, $password);  
        $sql = "select * from login where email = '$emailid' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location:home.php');  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>