<?php
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$password = filter_input(INPUT_POST, 'password');
    require_once('../model/database.php');

if(strlen($firstName) < 1 || strlen($lastName) < 1 || strlen($email)<1 || strlen($phone) < 1 || strlen($password) < 1) {

    echo "<h1>Error: Must fill all fields</h1>" ;
    include('addTechForm.php');
}else{

    $query = 'INSERT INTO technicians
                 (firstName, lastName, email, phone, password)
              VALUES
                (:firstName, :lastName, :email, :phone, :password)';


    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();

    include('../techManager/index.php');

}

?>
