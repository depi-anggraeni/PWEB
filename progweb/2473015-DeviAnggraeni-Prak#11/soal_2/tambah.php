<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2473015-Devi Anggraeni</title>
</head>
<body>
    <style>
        body{
            font-family: sans-serif;}
        .btn-simpan{
            background-color: #4CAF50;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;}
        .btn-kembali{
            background-color: #2196F3;
            color: white; padding: 8px 15px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;}
    </style>
</head>
<body>

<h2>Tambah Data Siswa</h2>

<form action="simpan.php" method="POST">
    <p>
        Nama:<br>
        <input type="text" name="nama" style="width: 300px; padding: 5px;">
    </p>
    <p>
        Kelas:<br>
        <input type="text" name="kelas" style="width: 300px; padding: 5px;">
    </p>

    <button type="submit" class="btn-simpan">Simpan</button>
    <a href="index.php" class="btn-kembali">Kembali</a>
</form>

</body>
</html>