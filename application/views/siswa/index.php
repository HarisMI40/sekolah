<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman Siswa</h1>
    <a href="<?= site_url('welcome/tambah') ?>">Tambah Data</a>
    <?php foreach ($siswa as $siswa) : ?>
           <p> Nama : <?= $siswa['nama']; ?></p>
           <p> Username : <?= $siswa['username']; ?></p> 
           <a href="<?= site_url('welcome/hapusSiswa/'. $siswa['id']) ?>"> Hapus </a>
           <a href="<?= site_url('welcome/getDetailSiswa/'. $siswa['id']) ?>"> Lihat </a>
           <p>=============================</p>
    <?php endforeach ?>

   
</body>
</html>