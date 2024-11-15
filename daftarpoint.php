<?php
// panggil koneksi database
include("dbkonek.php");

session_start();
if (!isset($_SESSION['nama'])) {
    header("Location: loginsiswa.php");
    exit();
}
?>
<style>
    * {
        padding: 5px;
        margin: auto;
        font-family: "Alatsi", sans-serif;
        font-weight: 400;
    }

    Pointmu {
        color: red;
        text-shadow: 1px 1px 0px black,
            -1px 1px 0px black,
            1px -1px 0px black,
            -1px -1px 0px black;
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
    <title>Data Point</title>
</head>

<body>
    <header>
        <h2 class="title">Halo <?php echo $_SESSION['nama']; ?><br> Ini data Pointmu</h2>
    </header>
    <div class="container">
        <table align="table responsive" class="table table-striped table-bordered table-hover">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Permasalahan</th>
                <th class="text-center">Point</th>
            </tr>
            <?php
            $no = 1;
            $tampil = mysqli_query($konek, "SELECT * FROM tb_point");
            while ($data = mysqli_fetch_array($tampil)) :

            ?>
                <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td class="text-center"><?= $data['permasalahan'] ?></td>
                    <td class="text-center"><?= $data['point'] ?></td>
                </tr>
                <!-- Modal Hapus -->
             <div class="modal fade" id="lapor<?= $no?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi</h5>
                        </div>
                        <form method="post" action="lapor.php">
                            <input type="hidden" name="nama" value="<?=$data['permasalahan']?>">
                            <div class="modal-body">
                                <h5 class="text-center">Apakah Anda akan Melaporkan kesalahan input data ini? <br> <span class="text-danger"><?=$data['nama']?> - <?=$data['permasalahan']?></span></h5>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="btnlapor">Hapus</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
             <!-- Modal Hapus -->
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>