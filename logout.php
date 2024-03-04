<?php
session_start();

if (session_status() == PHP_SESSION_ACTIVE) {
    session_destroy();
    echo '<script>alert("Anda Telah Logout");window.location="login.php"</script>';
} else {
    echo '<script>alert("Sesi tidak ditemukan");window.location="login.php"</script>';
}
?>
