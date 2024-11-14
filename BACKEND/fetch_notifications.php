<?php
require 'db.php';

$user_id = $_GET['user_id'];

$stmt = $pdo->prepare('SELECT * FROM notifications WHERE user_id = ? AND is_read = FALSE');
$stmt->execute([$user_id]);
$notifications = $stmt->fetchAll();

echo json_encode($notifications);
?>
