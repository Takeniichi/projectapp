<?php
session_start();
// panggil koneksi database
include("dbkonek.php");

// pengecekan login
if (isset($_POST['login'])) {
    $nisn = mysqli_real_escape_string($konek, $_POST['nisn']);
    $nama = mysqli_real_escape_string($konek, $_POST['nama']);
    $pw = $_POST['pw'];


    // Cek apakah username ada di database
    $query = "SELECT * FROM user WHERE nisn='$nisn' AND nama='$nama'";
    $result = mysqli_query($konek, $query);
    $pengguna = mysqli_fetch_assoc($result);

    if ($pengguna && password_verify($pw, $pengguna['pw'])) {
        // Login berhasil
        $_SESSION['nama'] = $pengguna['nama'];
        $_SESSION['jenis_murid'] = $pengguna['jenis_murid'];

        if ($pengguna['jenis_murid'] == 1){
            // jika jenismurid = 1 : siswa
            header("Location: daftarpoint.php");
        } elseif ($pengguna['jenis_murid'] == 2){
            // jika jenismurid = 2 : osis
            header("Location: menuosis.php");
        }
    } else {
        echo "<script>alert('NISN, Nama, atau password salah');</script>";
    }
}
?>
<style>
    * {
        padding: 0px;
        margin: 8px;
        font-family: "Alatsi", sans-serif;
        font-weight: 400;
    }

    .title {
        color: red;
        text-shadow: 1px 1px 0px black,
            -1px 1px 0px black,
            1px -1px 0px black,
            -1px -1px 0px black;
    }

    .h2 {
        color: black;
        text-shadow: 1px 1px 0px black,
            -1px 1px 0px black,
            1px -1px 0px black,
            -1px -1px 0px black;
    }

    img {
        width: auto;
        height: auto;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alatsi&display=swap');
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login Siswa</title>
</head>

<body>
    <div class="container">
        <header>
            <h2 class="title">Aplikasi untuk Point <br> Siswa</h2>
        </header>
        <img src="download.png" alt="logo sekolah aknb" class="d-grid gap-2 col-6 mx-auto">
        <h2 class="text-center">Masuk</h2>
        <form method="post" name="form1">
            <div class="col-md-6 mx-auto">
                <div class="mb-2">
                    <label for="nisn">NISN</label>
                    <input type="text" required name="nisn" class="form-control" placeholder="Masukkan NISN Anda">
                </div>
                <div class="mb-2">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" required name="nama" class="form-control" placeholder="Masukkan Nama Anda">
                </div>
                <div class="mb-2">
                    <label for="pw">Password</label>
                    <input type="password" required name="pw" class="form-control" placeholder="Masukkan Password">
                </div>
                <div class="mb-2">
                    <label for="jn">Jenis Murid : </label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">Siswa</option>
                        <option value="2">Osis</option>
                    </select>
                </div>
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
                <button class="btn btn-primary" name="login" type="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html>