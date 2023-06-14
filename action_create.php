<?php

include "conn.php";

if (isset($_POST['simpan'])) {
    $folder = './foto/';
    $foto = $_FILES['foto']['name'];
    $source = $_FILES['foto']['tmp_name'];
    move_uploaded_file($source, $folder . $foto);

    $name = $_POST['name'];
    $pass = $_POST['password'];
    $alamat = $_POST['alamat'];
    $sekolah = $_POST['sekolah'];

    $arr = explode(' ', $name);

    $username = '';

    foreach ($arr as $i) {
        $username .= strtolower($i) .  '_';

    };

    $username = rtrim($username, '_');

     $data = mysqli_query($conn, "INSERT INTO siswa SET name='$name', alamat='$alamat', sekolah='$sekolah', foto='$foto'");

     $siswa = mysqli_query($conn, "SELECT * FROM siswa ORDER BY id DESC LIMIT 1" );
     $fetch = mysqli_fetch_array($siswa);
     $id = $fetch['id'];

    $data = mysqli_query($conn, "INSERT INTO user SET username='$username', password='$pass' , siswa_id=$id " );

 


    if ($data) {
        echo "Data berhasil ditambahkan";
        echo "<a href='detail.php'>Lihat</a>";
    } else {
        echo "Data gagal ditambahkan";
        echo "<a href='create.php'>Kembali</a>";
    }
}

?>