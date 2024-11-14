<?php
require 'db.php';

$sender_id = $_POST['sender_id'];
$receiver_id = $_POST['receiver_id'];

$stmt = $pdo->prepare('INSERT INTO friend_requests (sender_id, receiver_id) VALUES (?, ?)');
$stmt->execute([$sender_id, $receiver_id]);

echo "Friend request sent!";
?>
