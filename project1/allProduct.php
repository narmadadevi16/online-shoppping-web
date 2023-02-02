<!DOCTYPE html>
<html>
<head>
    <title>All Product Page</title>
    <link rel="stylesheet" href="styles.css">
<style>


h1{
    font-size: 100px;
    color:rgb(118, 7, 166);
}
</style>
</head>
<body>


<ul>
  <li><a href="newProduct.php">Add New Product</a></li>
  <li><a href="allProduct.php">All Products</a></li>
  
  <li><a href="logout.php">Logout </a></li>
</ul>
<br><br>
<?php
        // put your code here
            include 'connection.php';
            session_start();
            
            $sql = "SELECT * FROM product1 ";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//                $active = $row['active'];
            ?>
    <center>
            <table >
            <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Price</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['pname'];?></td>
                
                <td><?php echo $rows['price'];?></td>
            </tr>
            <?php
                }
            ?>


</body>
</html>