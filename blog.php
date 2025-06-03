<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "personal_homepage";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM blog_posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Personal Homepage - Blog</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <nav>
        <div class="nav-links">
            <a href="index.html">Home</a> |
            <a href="gallery.html">Gallery</a> |
            <a href="blog.php">Blog</a> |
            <a href="contact.html">Contact</a>
        </div>
        <span id="clock" class="nav-clock"></span>
    </nav>

    <h1>Blog</h1>
    
    <?php
    if ($result->num_rows > 0):
        while($row = $result->fetch_assoc()):
    ?>
        <article>
            <h2><?= htmlspecialchars($row['title']) ?></h2>
            <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
        </article>
    <?php
        endwhile;
    else:
        echo "<p>Belum ada artikel.</p>";
    endif;

    $conn->close();
    ?>
</body>
</html>
