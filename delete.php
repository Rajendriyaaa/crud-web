<?php
//Koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = new mysqli($server, $username, $password, $database);


if (isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        echo "<b>Data yang dihapus tidak ada</b>";
    } else {
        $delete = mysqli_query($conn, "DELETE FROM siswa WHERE id='$_GET[id]'");
        $delete = mysqli_query($conn, "DELETE FROM user WHERE siswa_id='$_GET[id]'");
        if ($delete) {
            echo "Data Berhasil Dihapus <br>";
            echo "<a href='detail.php'>Kembali</a>";
        }
    }
}
?>