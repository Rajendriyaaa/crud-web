<?php

include "conn.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $alamat = $_POST['alamat'];
    $sekolah = $_POST['sekolah'];
    $pass = $_POST['password'];
    $folder = './foto/';
    $foto = $_FILES['foto']['name'];
    $source = $_FILES['foto']['tmp_name'];
    move_uploaded_file($source, $folder . $foto);

    $arr = explode(' ', $name);

    $username = '';

    foreach ($arr as $i) {
        $username .= strtolower($i) .  '_';

    };

    $username = rtrim($username, '_');

    if ($foto == '') {
    $data = mysqli_query($conn, "UPDATE siswa SET name='$name', alamat='$alamat', sekolah='$sekolah' WHERE id='$id'");

    } else {
    $data = mysqli_query($conn, "UPDATE siswa SET name='$name', alamat='$alamat', sekolah='$sekolah', foto='$foto' WHERE id='$id'");
    }

    $siswa = mysqli_query($conn, "SELECT * FROM siswa ORDER BY id DESC LIMIT 1" );
    $fetch = mysqli_fetch_array($siswa);
    $id = $fetch['id'];

    $data = mysqli_query($conn, "UPDATE user SET username='$username', password='$pass' , siswa_id=$id ");

    if ($data) {
        echo "Data berhasil diperbarui";
        echo "<a href='detail.php'>Lihat</a>";
    } else {
        echo "Data gagal diperbarui";
        echo "<a href='update.php'>Kembali</a>";
    }
}

?>