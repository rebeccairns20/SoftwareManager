<?php
require('../model/database.php');
include '../view/header.php';
$queryProducts = 'SELECT * FROM products
                  ORDER BY productCode';
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();

?>

</head>
<body>
<main>
    <h1>Product List</h1>

        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Version</th>
                <th>Release Date</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td class="right"><?php echo $product['version']; ?></td>
                <td><?php echo $product['releaseDate']; ?></td>
                <td><form action="../view/delete_product.php" method="post">
                    <input type="hidden" name="productCode"
                           value="<?php echo $product['productCode']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
                <td><form action="../view/edit_product.php" method="post">
                     <input type="hidden" name="productCode"
                           value="<?php echo $product['productCode']; ?>">
                     <input type="submit" value="Update">
                </form></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="../view/add_product_form.php">Add Product</a></p>
</main>
</body>
