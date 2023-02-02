<!DOCTYPE html>
<html>
<head>
    <title>Add new product</title>
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



<div class="main">
            <form method="post" action="newProductAction.php">
                
                <input  style="padding:5px;" type="text" name="pname" id="pname" placeholder="Enter product name"  required><br><br>
                
                <input  style="padding:5px;" type="number" name="price" id="price" placeholder="Enter price"   required><br><br>
                <center>
                    <input  type="submit" value="Save"><br><br>
                    
                </center>
                
            </form>
            

        </div>


</body>
</html>