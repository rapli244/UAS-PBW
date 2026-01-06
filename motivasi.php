<?php
include "koneksi.php";
$data = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM motivasi"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motivasi</title>
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

    <tengah id="tengah1">
        <h2>Motivasi</h2>
        <cerita class="cerita">
            <h2><?= $data['judul']; ?></h2>
            <p><?= nl2br($data['isi']); ?></p>
        </cerita>
    </tengah>

    <footer class="footer">CATATAN HARIAN BY RAFLI</footer>
</body>
</html>

