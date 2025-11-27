<?php
session_start();

// Hapus session
session_unset();
session_destroy();

// Balik ke login
header("Location: login.php");
exit();
?>
