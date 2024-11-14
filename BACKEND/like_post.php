<?php
require 'db.php';

$user_id = $_POST['user_id'];
$post_id = $_POST['post_id'];

$stmt = $pdo->prepare('INSERT INTO likes (user_id, post_id) VALUES (?, ?)');
$stmt->execute([$user_id, $post_id]);

echo "Post liked!";
?>
