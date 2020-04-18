<!DOCTYPE html>
<html>
<?php
require('../model/database.php');
// require('../model/product_db.php');
include '../view/header.php';

$custID = $_POST['custID'];

$queryProducts = 'SELECT * FROM customers
                  WHERE customerID = :custID';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':custID', $custID);
$statement3->execute();
$custs = $statement3->fetchAll();
$statement3->closeCursor();


?>
<!-- the head section -->
<head>

<link rel="stylesheet" type="text/css"
          href="../main.css">

</head>

<!-- the body section -->
<body>

    <main>
        <h1>View/Update Customer</h1>

        <?php foreach ($custs as $cust) : ?>
        <form action="updateCustomer.php" method="post"
              id="Update_Customer_form">

            <label>First Name:</label>
            <input type="text" name="fName" value="<?php echo $cust['firstName'];  ?>"><br>

            <label>Last Name:</label>
            <input type="text" name="lName" value="<?php echo $cust['lastName'];  ?>"><br>

            <label>Address:</label>
            <input type="text" name="address" value="<?php echo $cust['address'];  ?>"><br>

            <label>City:</label>
<input type="text" name="city" value="<?php echo $cust['city'];  ?>"><br>

<label>State:</label>
<input type="text" name="state" value="<?php echo $cust['state'];  ?>"><br>

<label>Postal Code:</label>
<input type="text" name="postCode" value="<?php echo $cust['postalCode'];  ?>"><br>

<label>Country Code:</label>
<input type="text" name="countryCode" value="<?php echo $cust['countryCode'];  ?>"><br>

<label>Phone:</label>
<input type="text" name="phone" value="<?php echo $cust['phone'];  ?>"><br>

<label>Email:</label>
<input type="text" name="email" value="<?php echo $cust['email'];  ?>"><br>

<label>Password:</label>
<input type="text" name="password" value="<?php echo $cust['password'];  ?>"><br>

<input type="hidden" name="custID" value="<?php echo $cust['customerID']; ?>">

<label>&nbsp;</label>
<input type="submit" value="Update Customer"><br>

<?php endforeach; ?>
</form>
<p><a href="https://cis241.rebeccairns12345.ml/classFiles/bookApps/techSupport/customerManager/index.php">Search Customers</a></p>
</main>

<?php include 'view/footer.php'; ?>
</body>
</html>
