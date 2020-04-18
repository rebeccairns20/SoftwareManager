<?php
require_once('../model/database.php');

// Get IDs
$productCode = $_POST['productCode'];

//echo $productCode;
// Delete the product from the database
    $query = 'DELETE FROM products
              WHERE productCode = :productCode';
    $statement = $db->prepare($query);
    $statement->bindValue(':productCode', $productCode);
    $success = $statement->execute();
    $statement->closeCursor();

// Display the Product List page
include('../product_manager/index.php');

?>
