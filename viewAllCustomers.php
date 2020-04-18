<?php

require('../model/database.php');
$queryProducts = 'SELECT * FROM customers
                  ORDER BY customerID';
$statement3 = $db->prepare($queryProducts);
$statement3->execute();
$custs = $statement3->fetchAll();
$statement3->closeCursor();

include('../customerManager/index.php');
?>
