<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
 <?php include 'header.php'; ?>


<link rel="stylesheet" type="text/css"
          href="../main.css">

</head>

<!-- the body section -->
<body>
    <header><h1>Product Manager</h1></header>

    <main>
        <h1>Add Product</h1>
        <form action="add_product.php" method="post"
              id="add_product_form">

            <label>Code:</label>
            <input type="text" name="code"><br>

            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>Version:</label>
            <input type="text" name="version"><br>

            <label>Release Date</label>
            <input type="datetime-local" name="date"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Product"><br>
        </form>
        <p><a href="https://cis241.rebeccairns12345.ml/classFiles/bookApps/techSupport/product_manager/index.php">View Product List</a></p>
    </main>

    <?php include 'view/footer.php'; ?>
</body>
</html>
                                                             42,1          Bot
