<?php
include('connection.php');
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $email = $_POST["email"]; 
    $password = $_POST["password"];
    $query=mysqli_query($con,"select * from users where email='$email' and password='$password'");
    $row = mysqli_fetch_array($query);
    $count = mysqli_num_rows($query);
            
	if($count==1)
	{
        $_SESSION["email"] = $row['email'];

        echo '<script type="text/javascript">
                        window.onload = function () { alert("Login Successfull"); } 
                    </script>';
                    include 'userhome.php';	
  
	}
	else
	{
        // $query1=mysqli_query($con,"select * from users where email='admin@gmail.com' and password='admin'");
        // $row1 = mysqli_fetch_array($query1);
        if($email=="admin@gmail.com" and $password=="admin")
        {
            $_SESSION["email"] = $email;
            echo '<script type="text/javascript">
            window.onload = function () { alert("Login Successfull"); } 
        </script>';
        include 'adminhome.php';	
      
        }
        else
        {
            echo '<script>alert("Something Went Wrong! Try Again!")</script>';
            
                
        }	
	}
    
   
    
    
}