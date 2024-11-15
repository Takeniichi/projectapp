<?php
session_start();
if ($_SESSION['jenis_murid'] != 2){
    // jika bukan osis, arahkan ke halaman lain
    header("Location: daftarpoint.php");
    exit();
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
    <title>Menu Osis</title>
</head>

<body>
    <div class="container">
        <header>
            <h2 class="title">Halo Kak<br> Osis</h2>
        </header>
        <img src="download.png" alt="logo sekolah aknb" class="d-grid gap-2 col-6 mx-auto">
        <br>
        <br>
        <div class="d-grid gap-2 col-4 mx-auto">
            <a href="daftarpoint.php" target="_self" rel="noopener noreferrer"><button class="btn btn-info" class="button1" name="MP" style="text-align: center;">Melihat Point Kamu</button></a>
        </div>
        <br>
        <div class="d-grid gap-2 col-4 mx-auto">
            <a href="tambahpointsiswa.php" target="_self" rel="noopener noreferrer"><button class="btn btn-danger" name="MP" style="text-align: center;">Memasukkan Point</button></a>
        </div>
    </div>
</body>

</html>