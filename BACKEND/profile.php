<?php
require 'db.php';

$user_id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$user_id]);
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $user['username']; ?>'s Profile</title>
</head>
<body>
    <h1><?php echo $user['username']; ?></h1>
    <img src="<?php echo $user['profile_picture']; ?>" alt="Profile Picture">
    <p><?php echo $user['bio']; ?></p>
</body>
</html>
