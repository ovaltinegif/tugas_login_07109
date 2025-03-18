<?php
$host = "localhost";
$user = "root"; // Default XAMPP tidak pakai password
$pass = ""; // Kosongkan jika pakai XAMPP
$db   = "login_07109"; // Nama database yang kamu buat

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
