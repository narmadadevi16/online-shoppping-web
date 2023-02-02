<?php
include('connection.php');

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobileno=$_POST['mobileno'];
    $question=$_POST['question'];
    $answer=$_POST['answer'];
    $password=$_POST['password'];

    $ins="insert into users(name,email,mobileno,question,answer,password)values('$name','$email','$mobileno','$question','$answer','$password')";

    $status=mysqli_query($con,$ins);
    if($status){
        echo '<script>
        window.location.href="index.php";
        alert("Successfully Registered")
        </script>';
    }
    else{
        echo '<script>alert("Something Went Wrong! Try Again!")</script>';
    }
}

?>