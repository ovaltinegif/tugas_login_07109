<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    if (isset($_COOKIE["user_id"])) {
        $_SESSION["user_id"] = $_COOKIE["user_id"];
    } else {
        header("Location: login.php");
        exit();
    }
}
?>

<h2>Selamat datang di Dashboard!</h2>
<a href="logout.php">Logout</a>
