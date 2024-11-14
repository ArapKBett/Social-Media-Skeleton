<?php
require 'db.php';

$user_id = $_POST['user_id'];
$post_id = $_POST['post_id'];
$content = $_POST['content'];

$stmt = $pdo->prepare('INSERT INTO comments (user_id, post_id, content) VALUES (?, ?, ?)');
$stmt->execute([$user_id, $post_id, $content]);

echo "Comment added!";
?>
