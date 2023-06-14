<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Data || User</title>
    <link rel="stylesheet" href="css/detail.css">
    <link rel="shortcut icon" href="logoSekolah.png" type="image/x-icon">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Data Siswa</h2>
                    <div class="btnCreate" style="margin-bottom: 10px;">
        <button>
            <a style="color: black; text-decoration: none;" href="create.php">Tambah Data Siswa</a>
        </button>
    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Sekolah</th>
                                    <th>Alamat</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "conn.php";
                                $no = 1;
                                $data = mysqli_query($conn, "SELECT * FROM siswa");
                                while ($fetch = mysqli_fetch_array($data)) { ?>
                                    <tr class="alert" role="alert">
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><?= $fetch['name']; ?></td>
                                        <td> <?= $fetch['sekolah']; ?></td>
                                        <td><?= $fetch['alamat']; ?></td>
                                        <td><img style="width: 150px; " src="foto/<?= $fetch['foto']; ?>" alt="<?= $fetch['foto'] ?>"></td>
                                        <td>
                                            <a onclick="return confirm('Apa anda sudah yakin?, data akan dihapus permanen')" href="delete.php?id=<?php echo $fetch['id']; ?>" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">delete</span>
                                            </a>
                                            <a onclick="return confirm('Apa anda ingin mengedit data ini ?')" href="update.php?id=<?php echo $fetch['id']; ?>" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">Edit</span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html