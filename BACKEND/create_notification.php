<?php
require 'db.php';

$user_id = $_POST['user_id'];
$message = $_POST['message'];

$stmt = $pdo->prepare('INSERT INTO notifications (user_id, message) VALUES (?, ?)');
$stmt->execute([$user_id, $message]);

echo "Notification created!";
?>
