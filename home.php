<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
include "koneksi.php";
$data = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM home"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="body">

    <header class="header">
        <h1>Catatan Harian</h1>
        <nav class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="cerita.php">Cerita</a></li>
                <li><a href="motivasi.php">Motivasi</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <tengah id="tengah">
        <h2>Selamat datang di Catatan Harian... </h2>
        <p><?= $data['isi']; ?></p>
    </tengah>

    <footer class="footer">CATATAN HARIAN BY RAFLI</footer>
</body>
</html>

