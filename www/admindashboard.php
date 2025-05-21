<?php


session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if($_SESSION['role'] != 'admin'){
    header('Location: user-dashboard.php');
    exit;
}
require 'database_connection.php'; 

$sql = "";
$sql = "SELECT COUNT(*) as aantal FROM users";
$result = mysqli_query($conn, $sql);
$total_users = mysqli_fetch_assoc($result)['aantal'];

$sql = "SELECT COUNT(*) as total_cards FROM cards";
$result = mysqli_query($conn, $sql);
$total_cards = mysqli_fetch_assoc($result)['total_cards'];

$sql = "SELECT COUNT(*) as total_normal FROM users";
$result = mysqli_query($conn, $sql);
$total_users = mysqli_fetch_assoc($result)['total_normal'];

require 'header.php';
require 'navbar.php';
?>

<!-- Tailwind CDN toevoegen als je die nog niet hebt -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md mt-8">
        <h1 class="text-2xl font-bold text-center mb-4 text-blue-700">
            Welkom admin <?php echo htmlspecialchars($_SESSION['firstname']); ?>!
        </h1>
        <div class="space-y-4">
            <div class="bg-blue-50 rounded-lg p-4 flex items-center justify-between">
                <span class="font-semibold text-gray-700">Totaal aantal gebruikers:</span>
                <span class="text-blue-700 font-bold"><?php echo $total_users;?></span>
            </div>
            <div class="bg-yellow-50 rounded-lg p-4 flex items-center justify-between">
                <span class="font-semibold text-gray-700">Totaal aantal kaarten:</span>
                <span class="text-yellow-600 font-bold"><?php echo $total_cards;?></span>
            </div>
            <div class="bg-green-50 rounded-lg p-4 flex items-center justify-between">
                <span class="font-semibold text-gray-700">Totaal aantal normale gebruikers:</span>
                <span class="text-green-700 font-bold"><?php echo $total_users;?></span>
            </div>
        </div>
    </div>
</div>

<footer>
    <?php require 'footer.php'; ?>
</footer>