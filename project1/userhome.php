<!DOCTYPE html>
<html>
<head>
    <title>User Home Page</title>
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

  <li><a href="home.php">Home</a></li>
  <li><a href="Cart.php">Add to Cart</a></li>
  <li><a href="logout.php">Logout </a></li>


</ul>
<br><br>
<h1>Welcome User</h1>

</body>
</html>