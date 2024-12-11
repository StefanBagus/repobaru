<?php
// Memulai sesi jika diperlukan
session_start();

// Contoh data untuk ditampilkan
$title = "Selamat Datang di Halaman Utama";
$content = "Ini adalah halaman index.php sederhana dengan PHP dan HTML.";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index PHP</title>
    <link rel="stylesheet" href="styles.css"> <!-- Tambahkan file CSS jika diperlukan -->
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
    </header>

    <main>
        <p><?php echo $content; ?></p>

        <!-- Contoh form login sederhana -->
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?>. Dibuat dengan PHP.</p>
    </footer>
</body>
</html>
