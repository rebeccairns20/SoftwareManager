<?php

require('../model/database.php');
$lName = $_POST['lastName'];

$queryProducts = 'SELECT * FROM customers
                  WHERE lastName = :lName';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':lName', $lName);
$statement3->execute();
$custs = $statement3->fetchAll();
$statement3->closeCursor();

include('../customerManager/index.php');

?>
