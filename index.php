<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP(2)</title>
</head>

<body>
    <h1>Progam Penerjemahan NIM</h1>
    <form action="" method="post">
        <div class="form-grub">
            <p for="nim">Masukkan NIM : (Contoh NIM = 23.01.52.0006)</p>
            <input type="text" id="nim" autofocus name="nim" placeholder="Masukkan Nim">
        </div>
        <button type="submit" name="simpan" style="margin-top: 20px;">
            Simpan
        </button>
    </form>
    <h1>
        <?php include 'tampilkanNim.php' ?>
    </h1>
    <?php include 'prosesIdentifikasi.php' ?>
</body>

</html>