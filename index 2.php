<?php
require('../model/database.php');
// require('../model/product_db.php');
include '../view/header.php';
$queryProducts = 'SELECT * FROM technicians
                  ORDER BY techID';
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$techs = $statement3->fetchAll();
$statement3->closeCursor();


?>
<head>
<link rel="stylesheet" type="text/css"
          href="../main.css">
</head>
<body>
<main>
    <h1>Technician List</h1>
        <table>
            <tr>
                <!--<th>Code</th>-->
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($techs as $tech) : ?>
            <tr>
                <!--<td><?php //echo $tech['techID']; ?></td>-->
                <td><?php echo $tech['firstName']; ?></td>
                <td><?php echo $tech['lastName']; ?></td>
                <td><?php echo $tech['email']; ?></td>
                <td><?php echo $tech['phone']; ?></td>
                <td><?php echo $tech['password']; ?></td>
                <td><form action="../view/deleteTech.php" method="post">
                    <input type="hidden" name="techID"
                           value="<?php echo $tech['techID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="../view/addTechForm.php">Add Technician</a></p>
</main
</body>
