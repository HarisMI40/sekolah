<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= site_url('welcome/insertSiswa') ?>" method="post">
        <div>Username : <input type="text" name="inputUsername"></div>
        <div>Nama : <input type="text" name="inputNama"></div>
        <div>Password : <input type="password" name="inputPassword"></div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>