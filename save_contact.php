<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "personal_homepage";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pesan Terkirim</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="nav-links">
            <a href="index.html">Home</a> |
            <a href="gallery.html">Gallery</a> |
            <a href="blog.html">Blog</a> |
            <a href="contact.html">Contact</a>
        </div>
    </nav>
    <h1>Status Pengiriman</h1>
    <div style="background-color: white; padding: 20px; border-radius: 10px;">
    <?php
    if ($name && $email && $message) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email tidak valid.</p>";
        } elseif (strlen($message) > 500) {
            echo "<p>Pesan terlalu panjang.</p>";
        } else {
            $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $message);
            $stmt->execute();
            $stmt->close();

            echo "<p>Pesan berhasil dikirim. Terima kasih, <strong>$name</strong>!</p>";
        }
    } else {
        echo "<p>Harap isi semua kolom.</p>";
    }
    $conn->close();
    ?>
    <p><a href="contact.html">Kembali ke Form</a></p>
    </div>
</body>
</html>
