<!DOCTYPE html>
<html>
<head>
    <title>AdminHome Page</title>
    <link rel="stylesheet" href="styles.css">
<style>


h1{
    font-size: 100px;
    color:rgb(118, 7, 166);
}
</style>
</head>
<body>


<p><?php echo $_SESSION['email']; ?></p>
<ul>
  <li><a href="newProduct.php">Add New Product</a></li>
  <li><a href="allProduct.php">All Products</a></li>
  
  <li><a href="logout.php">Logout </a></li>
</ul>
<br><br>
<h1>Welcome Admin</h1>

</body>
</html>