<?php

session_start();

include "conn.php";

$username = $_POST['username'];
$pass = $_POST['password'];
$error = "Username atau password salah. Silakan coba lagi.";

$sql = "SELECT * FROM user WHERE username='$username' AND password='$pass'";
$result = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    $_SESSION['name'] = $name;
    header("Location: detail.php");
} else {
    echo $error;
    echo "<br>";
    echo "<a href='index.php'>Kembali</a>";
}

?>