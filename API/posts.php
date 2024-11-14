// posts.php - Handling posts
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $content = $_POST['content'];

    $stmt = $pdo->prepare('INSERT INTO posts (user_id, content) VALUES (?, ?)');
    $stmt->execute([$user_id, $content]);

    echo "Post created successfully!";
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $stmt = $pdo->query('SELECT * FROM posts');
    $posts = $stmt->fetchAll();

    echo json_encode($posts);
}
