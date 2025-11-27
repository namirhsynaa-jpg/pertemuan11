<?php
session_start();

// Cek login
if (!isset($_SESSION['user_id'])) {
    echo "Anda belum login";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
    <h2>Selamat datang, <?= $_SESSION['nama']; ?> 👋</h2>
    <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
</div>

</body>
</html>
