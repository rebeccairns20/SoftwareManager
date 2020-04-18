<?php include '../view/header.php'; ?>
<head>
<link rel="stylesheet" type="text/css"
          href="../main.css">
</head>
<body>
<main>
    <h2>Customer Search</h2>
        <form action="../view/searchCustomers.php" method="post">
           <label>Last Name:</label>
           <input type="text" name="lastName">
           <input type="submit" value="Search">
        </form><br>
        <form action="../view/viewAllCustomers.php">
           <input type="submit" value="View All">
        </form>
        <br>
        <h2>Results</h2>
        <table>
            <tr>
                <!--<th>Code</th>-->
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($custs as $cust) : ?>
            <tr>
                <td><?php echo $cust['firstName'] .  " " . $cust['lastName']; ?></td>
                <td><?php echo $cust['email']; ?></td>
                <td><?php echo $cust['city']; ?></td>
                <td><form action="../view/ViewUpdateCust.php" method="post">
                    <input type="hidden" name="custID"
                           value="<?php echo $cust['customerID']; ?>">
                    <input type="submit" value="Select">
                </form></td>
                </tr>
            <?php endforeach; ?>
        </table>

</main
</body>
<?php include '../view/footer.php'; ?>
