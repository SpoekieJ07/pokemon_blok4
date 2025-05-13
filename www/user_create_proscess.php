<?php


if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid request method";
    exit;

}

require 'database_connection.php';

if(empty($_POST['firstname'])){
    echo "name field is required";
    exit;
}
if(empty($_POST['lastname'])){
    echo "lastname field is required";
    exit;
}
if(empty($_POST['email'])){
    echo "email field is required";
    exit;
}
if(empty($_POST['password'])){
    echo "password field is required";
    exit;
}
if(empty($_POST['role'])){
    echo "role field is required";
    exit;
}
if(empty($_POST['address'])){
    echo "address field is required";
    exit;
}
if(empty($_POST['city'])){
    echo "city field is required";
    exit;
}
if(empty($_POST['zipcode'])){
    echo "zipcode field is required";
    exit;
}
if(empty($_POST['phonenumber'])){
    echo "phonenumber field is required";
    exit;
}


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$address = $_POST['address'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$phonenumber = $_POST['phonenumber'];

if (strlen($firstname) < 2) {
    echo "name is too short";
    exit;
}


$sql = "INSERT INTO user (firstname, lastname, email, password, role, address, city, zipcode , phonenumber ) 
    VALUES ('$firstname', '$lastname', '$email','$password','$role','$address','$city','$zipcode','$phonenumber')";

if(mysqli_query($conn, $sql)){
    echo "New record created successfully";
} 

