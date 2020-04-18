<?php
// Get the product data
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$version = filter_input(INPUT_POST, 'version');
$date = filter_input(INPUT_POST, 'date');
    require_once('../model/database.php');

    $query = 'INSERT INTO products
                 (productCode, name, version, releaseDate)
              VALUES
                (:code, :name, :version, :date)';


    $statement = $db->prepare($query);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':version', $version);
    $statement->bindValue(':date', $date);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('../product_manager/index.php');
?>
