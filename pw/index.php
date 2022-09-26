<?php
require 'functions.php';
$buku = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Buku</title>

</head>
<body>
<div class="container ">
    <div class="card mt-5 bg-secondary text-light">
        <div class="card-body text-light">
            <h1 class="display-3 text-center ">Daftar Buku Informatika</h1>

            <table class="table table-bordered table-striped table-hover text-center bg-info" >
                <tr>
                    <th>No</th>
                    <th>Nama Buku</th>
                    <th>Nama Penerbit</th>
                    <th>Gambar</th>
                </tr>

                <?php if(empty($buku)) : ?>
                <tr>
                    <td colspan="4"><p style="color: red; font-style: italic;">Data Buku tidak ditemukan!</p></td>
                </tr>
                <?php endif; ?>

                <?php $i = 1; 
                foreach($buku as $bk) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $bk['nama_buku']; ?></td>
                        <td><?= $bk['pengarang']; ?></td>
                        <td><img src="asset/<?= $bk['gambar'] ?>" width="100"></td>
                    </tr>
                <?php endforeach; ?>
            </table>
      </div>
    </div>
</div>

<script src="js/script.js"></script>
</body>
</html>