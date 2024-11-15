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
    <title>Penambahan Point</title>
</head>

<body>
    <div class="container">
        <header>
            <h2 class="title">Memasukkan Point <br> Siswa</h2>
        </header>
        <img src="download.png" alt="logo sekolah aknb" class="d-grid gap-2 col-6 mx-auto">
        <h2 class="text-center">Masukkan <br> Point</h2>
        <form method="post" name="form1">
            <div class="col-md-6 mx-12">
                <div class="mb-2">
                    <label for="nama">Nama Siswa</label>
                    <input type="text" required name="nama" class="form-control" placeholder="Masukkan Nama Siswa">
                </div>
                <div class="mb-2">
                    <label for="nisn">Permasalahan</label>
                    <input type="text" required name="nisn" class="form-control" placeholder="Masukkan Permasalahan Siswa">
                </div>
                <div class="mb-2">
                    <label for="pw">Point</label>
                    <input type="number" required name="point" class="form-control" placeholder="Masukkan Jumlah Point">
                </div>
            </div>
            <br>
            <div class="d-grid gap-2 col-4 mx-auto">
                <button class="btn btn-light" name="tambah" type="submit">Tambah</button>
            </div>
        </form>
    </div>
</body>

</html>