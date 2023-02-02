<?php
include('connection.php');

if($_SERVER['REQUEST_METHOD']=="POST"){
    
    $pname=$_POST['pname'];
    
    $price=$_POST['price'];
    
    $ins="insert into product1(pname,price)values('$pname','$price')";

    $status=mysqli_query($con,$ins);
    if($status){
        echo '<script>
        window.location.href="newProduct.php";
        alert("Product Successfully Added")
        </script>';
    }
    else{
        echo '<script>alert("Something Went Wrong! Try Again!")</script>';
    }
}

?>