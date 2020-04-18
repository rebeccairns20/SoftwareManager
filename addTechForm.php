<!Doctype html>
<!-- the head section -->
<head>
 <?php include 'header.php';?>

<link rel="stylesheet" type="text/css"
          href="../main.css">

</head>

<!-- the body section -->
<body>
    <header><h1>Technician Manager</h1></header>

    <main>
        <h1>Add Tech</h1>
        <form action="addTech.php" method="post"
              id="addTechform">

            <label>First Name:</label>
            <input type="text" name="firstName"><br>

            <label>Last Name:</label>
            <input type="text" name="lastName"><br>

            <label>Email:</label>
            <input type="text" name="email"><br>

            <label>Phone</label>
            <input type="text" name="phone"><br>

            <label>Password</label>
            <input type="text" name="password"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Technician"><br>
        </form>
        <p><a href="https://cis241.rebeccairns12345.ml/classFiles/bookApps/techSupport/view/deleteTech.php">View Tech List</a></p>
    </main>

    <?php include 'view/footer.php'; ?>
</body>
</html>
