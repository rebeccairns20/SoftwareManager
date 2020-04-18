<?php
require_once('../model/database.php');

// Get IDs
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$postCode = $_POST['postCode'];
$countryCode = $_POST['countryCode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$custID = $_POST['custID'];

if(strlen($fName) < 1 || strlen($lName) < 1 || strlen($address) < 1 || strlen($city) < 1 || strlen($state) < 1 || strlen($postCode) < 1 || strlen($countryCode) < 1 || strlen($phone) < 1 || strlen($email) < 1 || strlen($password) < 1){

        echo "<h1>Error: Must fill all fields</h1>" ;
        include(viewUpdateCustomer.php);
}else{
echo "Else ran";

        $query = 'UPDATE customers
                  SET firstName = :fName, lastName = :lName, address = :address, city = :city,
                      state = :state, postalCode = :postCode, countryCode = :countryCode,
                      phone = :phone, email = :email, password = :password
                  WHERE customerID = :custID';
    $statement = $db->prepare($query);
    $statement->bindValue(':custID', $custID);
    $statement->bindValue(':fName', $fName);
    $statement->bindValue(':lName', $lName);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':postCode', $postCode);
    $statement->bindValue(':countryCode', $countryCode);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $success = $statement->execute();
    $statement->closeCursor();

    include('../customerManager/index.php');
  }

?>
