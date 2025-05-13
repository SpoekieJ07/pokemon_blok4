<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if($user['role'] != 'admin'){
  header('Location: user-dashboard.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    welkom <?php $_SESSION['firstname'];?>!
    <div>
     <a href=""></a>
    </div>
</body>
</html>