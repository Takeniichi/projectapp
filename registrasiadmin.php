<?php
include("dbkonek.php");

if (isset($_POST['registrasi'])) {
    $nisn = mysqli_real_escape_string($konek, $_POST['nisn']);
    $nama = mysqli_real_escape_string($konek, $_POST['nama']);
    $pw = password_hash($_POST['pw'], PASSWORD_DEFAULT); // Enkripsi password
    $jenis_murid = $_POST['jenis_murid'];  // Ambil jenis murid

    $query = "INSERT INTO user(nisn, nama, pw, jenis_murid) VALUES ('$nisn', '$nama', '$pw', '$jenis_murid')";
    if (mysqli_query($konek, $query)) {
        echo "<script>alert('Registrasi berhasil');</script>";
        echo "<script>window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal');</script>";
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

    @import url('https://fonts.googleapis.com/css2?family=Alatsi&display=swap');
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Registrasi admin only</title>
</head>

<body>
    <header>
        <h2 class="title">Aplikasi untuk Registrasi <br> Siswa</h2>
    </header>
    <img src="download.png" alt="logo sekolah aknb" class="d-grid gap-2 col-6 mx-auto">
    <h2 class="text-center">Masuk</h2>
    <form method="post" name="form1">
        <div class="col-md-6 mx-auto">
            <div class="mb-2">
                <label for="nisn">NISN :</label>
                <input type="text" required name="nisn" class="form-control">
            </div>
            <div class="mb-2">
                <label for="nama">Nama Siswa :</label>
                <input type="text" required name="nama" class="form-control">
            </div>
            <div class="mb-2">
                <label for="pw">Password :</label>
                <input type="password" name="pw" required class="form-control">
            </div>
            <div class="mb-2">
                <label for="jenis_murid">Jenis Murid : </label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih disini</option>
                    <option value="1">Siswa</option>
                    <option value="2">Osis</option>
                </select>
            </div>
                
        <div class="d-grid gap-2 col-4 mx-auto">
            <button class="btn btn-primary" type="submit" name="registrasi">Register</button>
        </div>
    </form>
</body>

</html>