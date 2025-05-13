<?php


if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid request method";
    exit;

}

require 'database_connection.php';

if(!isset($_POST['name'])){
    echo "name field is required";
    exit;
}
if(!isset($_POST['type'])){
    echo "type field is required";
    exit;
}
if(!isset($_POST['image'])){
    echo "image field is required";
    exit;
}

$name = $_POST['name'];
$type = $_POST['type'];
$image = $_POST['image'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$description = $_POST['description'];

if (empty($name)) {
    echo "Name is required";
    exit;
}
if (empty($type)) {
    echo "type is required";
    exit;
}
if (empty($image)) {
    echo "image is required";
   exit;
}
if (strlen($name) > 20) {
    echo "Name is too long";
    exit;
}
if (!filter_var($image, FILTER_VALIDATE_URL)) {
    echo "Invalid image URL";
    exit;
}

$sql = "INSERT INTO cards (name, type, image, weight, description, height) 
    VALUES ('$name', '$type', '$image','$weight','$description','$height')";

if(mysqli_query($conn, $sql)){
    echo "New record created successfully";
} 

