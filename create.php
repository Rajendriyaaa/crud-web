<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
    <link rel="stylesheet" href="css/create.css">
</head>

<body>

    <div class="container">
        <?php include "conn.php"; ?>
        <h1>Tambah data siswa</h1>
        <p>Isikan semua data dengan benar, lalu tekan simpan</p>

        <form action="action_create.php" method="post" enctype="multipart/form-data">

            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="name" name="name" required></td>
                </tr>

                <tr>
                    <td>Sekolah</td>
                    <td>:</td>
                    <td><input type="text" name="sekolah" required></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" required></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" required></td>
                </tr>

                <tr>
                    <td>Foto</td>
                    <td>:</td>
                    <td><input type="file" name="foto" required></td>
                </tr>
                
                </tr>


            </table>

            <br>
            <input onclick="return confirm('Apa anda sudah yakin?')" type="submit" value="SIMPAN" name="simpan"
                width="100%">

        </form>
    </div>

    <div>
        <button style="position: absolute; bottom: 0; margin-bottom: 20px; width: 100px; margin-left: 15px;">
            <a href="detail.php" style="color: red; text-decoration: none;">Kembali</a>
        </button>
    </div>
</body>

</html>